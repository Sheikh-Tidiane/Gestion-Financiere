<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'frontuser_id',
        'card_number',
        'card_date',
        'expiration_date',
        'montant',
        'cvv',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(FrontUser::class);
    }
}
