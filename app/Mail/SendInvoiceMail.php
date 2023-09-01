<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $commande;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($commande)
    {
        $this->commande = $commande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
        ->subject('Bon de   - commande')
        ->view('livewire.commande.missionssendGmail');
        // ->attachData($this->pdf->output(), 'Bondecommande.pdf');
    }

//     public function attachments(): array
//      {
//         return [
//         Attachment::fromPath('/path/to/file'),
//         ];
//  }
}
