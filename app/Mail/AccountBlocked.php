<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Frontuser;

class AccountBlocked extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Déclarer la variable $user comme publique

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Frontuser $user) // Passer le modèle Frontuser en tant qu'argument
    {
        $this->user = $user; // Assigner le modèle utilisateur à la variable $user
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Votre compte a été bloqué')
                    ->view('email.account_blocked');
    }
}
