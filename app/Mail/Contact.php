<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact) //methode qui se declenche quand on fait une instanciation de la classe
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('monsite@indira.fr') //expéditeur
            ->cc('admin@indira.fr') //destinataire en copie CC
            ->subject('Mail reçu depuis mon site :') //Objet du mail
            ->view('emails.contact'); // Vue. (point ou slash c'est poreil)
        }   
}
