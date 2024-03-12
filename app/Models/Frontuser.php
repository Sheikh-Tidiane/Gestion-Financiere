<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Frontuser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $guard = 'front';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'frontusers'; // Nom de la table dans la base de données

    protected $primaryKey = 'id'; // Nom de la clé primaire

    protected $fillable = [
        'name',
        'email',
        'password',
        'cni',
        'telephone',
        'type_compte',
        'rib',
        'pack_id',
        'solde',
        'etat'
    ];

    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      /**
     * Check if the user account is not blocked.
     *
     * @return bool
     */
    public function isNotBlocked()
    {
        return $this->etat == 0; // Si 'etat' est égal à 0, le compte n'est pas bloqué
    }

}
