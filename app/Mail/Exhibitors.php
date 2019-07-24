<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Exhibitor;

class Exhibitors extends Mailable
{
    use Queueable, SerializesModels;

    public $exhibitor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Exhibitor $exhibitor)
    {
         $this->exhibitor = $exhibitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('dashboard.pages.mail.exhibitorsMail');
    }
}
