<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSend extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $fullname;
    public $phone;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $fullname, $phone, $messageContent)
    {
        //
        $this->email = $email;
        $this->fullname = $fullname;
        $this->phone = $phone;
        $this->messageContent = $messageContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Impaxis Groupe <Besoin client>',
            // replyTo: [
            //     'contact@impaxis-groupe.com', 'Impaxis Groupe <Besoin client>',
            // ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_form_send',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
