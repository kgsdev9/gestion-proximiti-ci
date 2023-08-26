<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendPDFMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $pdf;

    /**
     * Create a new message instance.
     */
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Send PDF Mail',
    //     );
    // }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
               ->subject('Rapport  - De Commande ')
               ->view('mail.rapportCommande')
               ->attachData($this->pdf->output(), 'rapportcommade.pdf');
    }



    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mail.rapportCommande',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [
    //         Attachment::fromPath('/path/to/file'),


    //     ];
    // }
}
