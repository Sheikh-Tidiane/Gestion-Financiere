<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Frontuser;
use App\Models\Pack;
use Carbon\Carbon;

class DeduireFraisMensuelsPack extends Command
{
    protected $signature = 'deduire:frais-mensuels-pack';
    protected $description = 'Déduire les frais mensuels du pack du solde des utilisateurs';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Récupérer la date actuelle
        $aujourdhui = Carbon::now();

        // Récupérer tous les utilisateurs
        $utilisateurs = Frontuser::all();

        foreach ($utilisateurs as $utilisateur) {
            // Vérifier si l'utilisateur a un pack
            if ($utilisateur->pack_id) {
                // Récupérer le pack de l'utilisateur
                $pack = Pack::find($utilisateur->pack_id);

                if ($pack) {
                    // Vérifier si la date de création du compte est le même jour que la date actuelle
                    if ($utilisateur->created_at->day == $aujourdhui->day) {
                        // Déduire le prix du pack du solde de l'utilisateur
                        $utilisateur->solde -= $pack->prix;

                        // Enregistrer les modifications
                        $utilisateur->save();
                    }
                }
            }
        }

            // Passer les données mises à jour à la vue
            $users = Frontuser::all(); // récupérer les utilisateurs mis à jour avec leur solde
            // Passer les données à la vue
            view()->share('users', $users);

        $this->info('Frais mensuels du pack déduits avec succès.');
    }
}
