<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $dataObject;    
	public $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataObject, $type)
    {
				
		$this->type = $type;
		
		$this->dataObject = $dataObject;
			
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		if($this->type == "getQuoteAdmin"){
			return $this->subject('Quotation request received.')->view('emails.getquoteadmin');
		}
		if($this->type == "getQuote"){
			return $this->subject('Thank you for contacting us.')->view('emails.getquote');
		}
		if($this->type == "contactUsAdmin"){
			return $this->subject('Contact Us request received.')->view('emails.contactusadmin');
		}
		if($this->type == "contactUs"){
			return $this->subject('Thank you for contacting us.')->view('emails.contactus');
		}
        
    }
}
