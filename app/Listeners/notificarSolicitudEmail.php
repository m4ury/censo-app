<?php

namespace App\Listeners;


use Illuminate\Support\Facades\Notification;
use App\Events\newSolicitudCreada;
use App\Mail\newSolicitudCreadaMail;
use App\Notifications\newSolicitudCreadaNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class notificarSolicitudEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(newSolicitudCreada $event)
    {
        Mail::tod('mmoraless@ssmaule.cl')->send(new newSolicitudCreadaMail($event->solicitud));
    }
}
