<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontuser;
use App\Models\Pack;


class AdminController extends Controller
{
    public function index()
    {
        $users = Frontuser::all(); // Récupérer tous les utilisateurs
        return view('dashboard', ['users' => $users]); // Passer les utilisateurs à la vue

    }

    public function blockAccount($id)
{
    // Logique pour bloquer le compte avec l'ID $id
    $user = Frontuser::findOrFail($id);
    $user->etat = 1;
    $user->save();

    return redirect()->back()->with('message_success', 'Le compte a été bloqué avec succès.');
}

public function unblockAccount($id)
{
    // Trouver l'utilisateur
    $user = Frontuser::findOrFail($id);

    // Débloquer le compte
    $user->etat = false;
    $user->save();

    // Rediriger avec un message de succès
    return redirect()->back()->with('message_success', 'Le compte a été débloqué avec succès.');
}

}
