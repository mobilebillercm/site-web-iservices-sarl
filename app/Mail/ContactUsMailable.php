<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $de, $template, $user, $homeUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from, $template, $user, $homeUrl)
    {
        $this->de = $from;
        $this->template = $template;
        $this->user = $user;
        $this->homeUrl = $homeUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->de)->view($this->template)->with(['user'=>$this->user, 'iservicehome_url'=>$this->homeUrl]);
        //return $this->view($this->notificationtemplate)->with(['eventName'=>$this->eventName]);
    }
}
