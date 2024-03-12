<?php
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationBeneficiaire extends Mailable
{
    use Queueable, SerializesModels;
/*
    public $expediteur;
    public $nomBeneficiaire;
    public $prenomBeneficiaire;
    public $montant;

    public function __construct($expediteur, $nomBeneficiaire, $prenomBeneficiaire, $montant)
    {
        $this->expediteur = $expediteur;
        $this->nomBeneficiaire = $nomBeneficiaire;
        $this->prenomBeneficiaire = $prenomBeneficiaire;
        $this->montant = $montant;
    }

    public function build()
    {
        return $this->view('emails.notification_beneficiaire')
                    ->subject('Notification de transfert d\'argent');
    }
    */
}
