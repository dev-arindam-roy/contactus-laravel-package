<?php

namespace Creativesyntax\Contactus\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactusMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $requestData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestData)
    {
        $this->requestData = $requestData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $DataBag['data'] = $this->requestData;
        return $this->view('contactus::mail', $DataBag);
    }
}
