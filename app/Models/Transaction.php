<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Nom de la table dans la base de données

    protected $primaryKey = 'id'; // Nom de la clé primaire

    protected $fillable = [
            'nom_expediteur',
            'telephone_expediteur',
            'ville_origine',
            'nom_beneficiaire',
            'prenom_beneficiaire',
            'telephone_beneficiaire',
            'ville_destinaire',
            'montant',
            'email_beneficiaire'

    ];
}
