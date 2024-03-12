<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Transaction;
use App\Models\Frontuser;

class TransferMoneyNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($montant, $prenom_expediteur)
    {
        $this->montant = $montant;
        $this->prenom_expediteur = $prenom_expediteur;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Notification de transfert d\'argent')
        ->line('Bonjour,')
        ->line('Vous avez reçu un transfert d\'argent de la part de ' . $this->prenom_expediteur)
        ->line('Montant transféré : ' . $this->montant . ' XOF')
        ->line('Merci d\'utiliser notre service de transfert d\'argent.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
