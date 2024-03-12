<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Frontuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationBeneficiaire;
use App\Notifications\TransferMoneyNotification;


class TransactionController extends Controller
{
    // Affiche le formulaire de création de transaction
    public function create()
    {
        $frontuser = Frontuser::findOrFail(auth('front')->id());
        return view('transactions.create', ['frontuser' => $frontuser]);
    }

    public function retrait()
    {
        return view('transactions.retrait');
    }

// Stocke une nouvelle transaction dans la base de données
public function store(Request $request)
{
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'ville_origine' => 'required|string',
            'nom_beneficiaire' => 'required|string',
            'prenom_beneficiaire' => 'required|string',
            'telephone_beneficiaire' => 'required|string',
            'ville_destinaire' => 'required|string',
            'montant' => 'required|numeric',
            'email_beneficiaire' => ['required','email'],
        ]);

        // Récupérer l'utilisateur authentifié
        $user = auth('front')->user();

        // Ajouter les informations de l'expéditeur aux données validées
        $validatedData['nom_expediteur'] = $user->name;
        $validatedData['telephone_expediteur'] = $user->telephone;

        // Récupérer le solde de l'utilisateur expéditeur
        $solde_expediteur = $user->solde;

        // Récupérer le montant de la transaction
        $montant = $request->montant;

        // Vérifier si le solde de l'expéditeur est suffisant pour le transfert
        if ($solde_expediteur >= $montant) {
            // Déduire le montant transféré du solde de l'expéditeur
            $user->solde -= $montant;
            $user->save();

            // Créer une nouvelle transaction avec les données validées
            $transaction = Transaction::create($validatedData);

            // Envoyer la notification au bénéficiaire
            $beneficiary = Frontuser::where('email', $request->email_beneficiaire)->first();
            if ($beneficiary) {
                $montant = $request->montant;
                $prenom_expediteur = $request->prenom_expediteur;
                $beneficiary->notify(new TransferMoneyNotification($montant, $prenom_expediteur));
            } else {
                // Gérer le cas où le bénéficiaire n'existe pas
                return redirect()->back()->with('error', 'Le bénéficiaire n\'existe pas.');
            }

            // Rediriger vers une page de confirmation avec l'identifiant de la transaction
            return redirect()->route('transactions.show', $transaction->id);
        } else {
            // Solde insuffisant, afficher un message d'erreur
            return redirect()->back()->withErrors(['solde' => 'Solde insuffisant pour effectuer ce transfert.']);
        }
    }



// Méthode pour afficher les détails de la transaction confirmée
public function show($id)
{
    // Récupérer les détails de la transaction à partir de l'identifiant
    $transaction = Transaction::findOrFail($id);

    // Afficher la vue de confirmation avec les détails de la transaction
    return view('transactions.show', compact('transaction'));
}

    public function index()
{
        // Récupérer l'utilisateur connecté
        $user = auth('front')->user();

        // Récupérer le pack choisi par l'utilisateur
        $packType = $user->pack_id;
        // Définir le plafond de transferts en fonction du pack choisi
        $plafond = 0;
        if ($packType === '1') {
            $plafond = 1000000; // Plafond pour le pack standard
        } elseif ($packType === '2') {
            $plafond = 5000000; // Plafond pour le pack premium
        } elseif ($packType === '3') {
            $plafond = 10000000; // Plafond pour le pack gold
        }


        // Récupérer les transactions où le nom de l'expéditeur correspond au nom de l'utilisateur connecté
        $transactions = Transaction::where('nom_expediteur', $user->name)->get();

            // Compter le nombre total de transactions
    $totalTransactions = $transactions->count();

        // Calculer le total des transferts en XOF
        $totalTransfertsXOF = $transactions->sum('montant');


    return view('front.dashboard', compact('user','totalTransfertsXOF','totalTransactions', 'transactions','plafond'));
}
}



