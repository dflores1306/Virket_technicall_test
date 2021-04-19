<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmJoin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $telefono;
    public $birthday;
    public $image_url;

    public function __construct($name,$email,$telefono,$birthday,$image_url)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->birthday = $birthday;
        $this->image_url = $image_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.confirm_join');
    }
}
