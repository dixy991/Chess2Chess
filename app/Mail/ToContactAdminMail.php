<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToContactAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $email;

    public $data;
    public $sender;

    public function __construct($data, $sender)
    {
        $this->data = $data;
        $this->sender = $sender;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->subject("Mejl od mene")->view('partials.sendemail');
        return $this->from($this->sender)->subject('Message from Chess2Chess site')->view('partials.sendemail')->with('data', $this->data);
    }
}
