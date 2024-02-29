<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class booking extends Mailable
{
    use Queueable, SerializesModels;
 
    public $mailData;
    
    /**
     * Create a new message instance.
     */

    public function __construct($mailData)
    {
        //
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Free Class from Kerith Fountain of Learning',
            //from: new Address('kerithfountain.com', 'Admin'),
            
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.bookingmail',
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
