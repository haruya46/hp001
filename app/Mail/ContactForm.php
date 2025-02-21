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

    public $inputs;
    private $filePath;

    public function __construct($inputs, $filePath = null)
    {
        $this->inputs = $inputs;
        $this->filePath = $filePath;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'お問い合わせを受け付けました',
            to: 'test@test'
        );
    }

    public function content()
    {
        return new Content(
            view: 'contact_form',
        );
    }

    public function build()
    {
        // メールの基本設定
        $email = $this->view('contact_form')
                      ->subject('お問い合わせを受け付けました');
                   

        // 添付ファイルが指定されていれば添付する
        if ($this->filePath) {
            $email->attach(storage_path("app/public/{$this->filePath}"), [
                'as' => 'document.pdf',  // 添付ファイル名
                'mime' => 'application/pdf',  // MIMEタイプ
            ]);
        }

        return $email;
    }
}
