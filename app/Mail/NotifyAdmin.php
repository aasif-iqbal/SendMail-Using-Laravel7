<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $blog_post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($blog_post)
    {
        $this->blog_post = $blog_post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       //return $this->subject("Testing Mail Service")->view('mail.notifyAdmin');
       return $this->subject("Testing Mail Service")->markdown('mail.notifyAdmin');       
    }
}
