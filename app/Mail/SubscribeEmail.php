<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeEmail extends Mailable
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
      $name = 'TIPIDKOR POLDA KALIMANTAN TIMUR';

      return $this->view('emails.subscribe')
                  ->from('admin@ditreskrimsus.com', $name)
                  ->cc('admin@ditreskrimsus.com', $name)
                  ->bcc('admin@ditreskrimsus.com', $name)
                  ->replyTo('admin@ditreskrimsus.com', $name)
                  ->subject('Terima kasih telah subscibe!');
    }
}
