<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Support\Str;
use App\Models\Frontuser;
use Illuminate\Http\Request;

class CarteController extends Controller
{
/*
    public function generateCardForUser($userId)
{
    $cardNumber = 'XXXX-XXXX-XXXX-XXXX' . Str::random(4); // Générer un numéro de carte fictif
    $cardDate = now();
    $expirationDate = now()->addYears(3); // Exemple : carte expirant dans 3 ans
    $amount = 0; // Montant initial de la carte
    $cvv = Str::random(3); // Générer un CVV fictif

    // Créer une carte pour l'utilisateur
    $card = Card::create([
        'frontuser_id' => $userId,
        'card_number' => $cardNumber,
        'card_date' => $cardDate,
        'expiration_date' => $expirationDate,
        'montant' => $amount,
        'cvv' => $cvv,
    ]);

    // Retourner la carte créée
    return $card;
}
*/

 // Méthode pour afficher les cartes de l'utilisateur
 public function showCards(Request $request, $id)

 {
    // Récupérer la carte associée à l'utilisateur dont l'ID est passé en paramètre
     $card = Card::where('frontuser_id', $id)->firstOrFail();

     // Afficher la vue avec la carte
     return view('cartes.show', ['card' => $card]);
 }

}
