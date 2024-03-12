<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Frontuser;
use App\Models\Pack;
use App\Notifications\NouvelUtilisateurInscrit;
use App\Mail\WelcomeMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $packs = Pack::all();
        return view('front.auth.register', compact('packs'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:frontusers'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cni' => ['required', 'numeric', 'unique:frontusers'],
            'telephone' => ['required', 'regex:/^\d{8,}$/'],
            'type_compte' => ['required', 'string', 'max:255'],
            //'pack_id' => ['required', 'string', 'max:255'],
            'solde' => ['required', 'numeric'],
        ]);

        // Génération du RIB unique
        $rib = '';
        do {
            $rib = '';
            for ($i = 0; $i < 24; $i++) {
                $rib .= rand(0, 9); // Ajoute un chiffre aléatoire à la chaîne RIB
            }
        } while (Frontuser::where('rib', $rib)->exists());

            // Recherche du pack en fonction de son ID
        $pack = Pack::findOrFail($request->pack_id);
        $user = Frontuser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cni' => $request->cni,
            'telephone' => $request->telephone,
            'type_compte' => $request->type_compte,
            'rib' => $rib,
            // Récupérez l'ID du pack choisi dans le formulaire
            //'pack_id' => $pack->nom,
            'pack_id' => $request->pack_id,
            'solde' => $request->solde
        ]);

        event(new Registered($user));

        Auth::guard('front')->login($user);

        // Après avoir enregistré l'utilisateur
        Mail::to($user->email)->send(new WelcomeMail($user,$pack));

        // Récupérer le montant spécifié par l'utilisateur
        $montant = $request->input('solde');
        // Appeler la méthode pour générer une carte pour l'utilisateur
        $this->generateCardForUser($user->id,$montant);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Generate a card for the user.
     *
     * @param  int  $userId
     * @return \App\Models\Card
     */

     protected function generateCardForUser($userId,$montant)
{
    // Générer un numéro de carte unique composé de chiffres uniquement
    $cardNumber = '';
    do {
        $cardNumber = '';
        for ($i = 0; $i < 16; $i++) {
            $cardNumber .= rand(0, 9); // Ajoute un chiffre aléatoire à la chaîne du numéro de carte
            if (($i + 1) % 4 == 0 && $i < 15) {
                $cardNumber .= ' '; // Ajoute un espace tous les 4 chiffres (pour le format XXXX XXXX XXXX XXXX)
            }
        }
    } while (Card::where('card_number', $cardNumber)->exists());

    // Générer la date actuelle
    $cardDate = now();
    // Générer la date d'expiration dans 3 ans
    $expirationDate = now()->addYears(3);
     // Générer un CVV unique composé uniquement de chiffres
     $cvv = '';
     do {
         $cvv = ''; // Réinitialiser le CVV
         for ($i = 0; $i < 3; $i++) {
             $cvv .= rand(0, 9); // Ajouter un chiffre aléatoire au CVV
         }
     } while (Card::where('cvv', $cvv)->exists()); // Vérifier si le CVV existe déjà

    // Créer une carte pour l'utilisateur
    $card = Card::create([
        'frontuser_id' => $userId,
        'card_number' => $cardNumber,
        'card_date' => $cardDate,
        'expiration_date' => $expirationDate,
        'montant' => $montant,
        'cvv' => $cvv,
    ]);

    // Retourner la carte créée
    return $card;
}

}
