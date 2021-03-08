<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ImmMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Resultados";
    public $pdf;

    public $nombre;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf,$pdf2,$name, $name2,$nombre)
    {
        //
        $this->pdf = $pdf;
        $this->name = $name;
        $this->name2 = $name2;
        $this->pdf2 = $pdf2;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reclamo')->attachData($this->pdf, $this->name.'.pdf')->attachData($this->pdf2, $this->name2.'.pdf');
    }
}
