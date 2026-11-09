<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailInformation extends Mailable
{
    use Queueable, SerializesModels;
    public $email_pribadi;
    public $password;
    public $nama;
    public $link;
    public $jenis_kelamin;
    public $email_institusi;
    // public $email_pribadi;
    /**
     * Create a new message instance.
     */
    public function __construct($email_pribadi, $password, $nama, $jenis_kelamin,$email_institusi)
    {
        $this->email_pribadi = $email_pribadi;
        $this->password = $password;
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin=='Perempuan'?'Ibu':'Bapak';
        $this->email_institusi = $email_institusi;
        $this->link = redirect()->route('login')->getTargetUrl();
        // $this->$email_pribadi = $email_pribadi;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Penyampaian Kredensial Akses Aplikasi SMDK (Sistem Monitoring dan Data Kinerja) SDM Telkom University Surabaya',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.Emailinformation',
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
