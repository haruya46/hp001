<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($inputs)
    {
        $this->data = $inputs;
    }

    public function envelope()
    {
        return new Envelope(
            subject: '[お問い合わせ] ' . $this->data['name'] . '様より',
        );
    }

    public function content()
    {
        return new Content(
            view: 'contact_form',
            with: ['data' => $this->data],
        );
    }
}
