<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateAnimalEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nomAnimal;
    public $descriptionAnimal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom)
    {
        $this->nomAnimal = $nom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('un nouvel animal à été créé')->view('mails.new-animal');
    }
}
