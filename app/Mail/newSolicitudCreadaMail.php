<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Events\newSolicitudCreada;
use App\Listeners\notificarSolicitudEmail;

class newSolicitudCreadaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitud;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitud)
    {
        $this->solicitud = $solicitud;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-solicitud')->with('solicitud');
    }
}
