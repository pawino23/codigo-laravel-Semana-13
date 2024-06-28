<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;

    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mensaje Recibido',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.mensaje-recibido',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}