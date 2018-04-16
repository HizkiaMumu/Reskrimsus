<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SupportEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      $address = $this->data['email'];
      $subject = $this->data['subject'];
      $name = $this->data['name'];
      $message = $this->data['message'];

      return $this->view('emails.support')
                  ->from($address, $name)
                  ->cc($address, $name)
                  ->bcc($address, $name)
                  ->replyTo($address, $name)
                  ->subject($subject)
                  ->with([ 'message' => $message ]);
    }
}
