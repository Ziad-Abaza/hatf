<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class InvoiceNotification extends Mailable
{
    use Queueable, SerializesModels;
    public  $tranRef,$code,$message;
    /**
     * Create a new message instance.
     */
    public function __construct($tranRef,$code,$message)
    {
        $this->tranRef=$tranRef;
        $this->code=$code;
        $this->message=$message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Invoice Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.invoice-notification',
        );
    }

}
