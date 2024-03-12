<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', // Nom du pack
        'prix', // Prix mensuel du pack
        'plafond', // Plafond du pack
    ];
    public function frontusers()
    {
        return $this->hasMany(Frontuser::class);
    }
}
