<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InqueryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $messageBody;
    public $url;
    public $attachment;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $messageBody, $url, $attachment = null)
    {
        $this->subject = $subject;
        $this->messageBody = $messageBody;
        $this->url = $url;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $email = $this->markdown('emails.inquery')
            ->subject($this->subject);

        // Attach the file if provided
        if ($this->attachment) {
            $email->attach($this->attachment->getRealPath(), [
                'as' => $this->attachment->getClientOriginalName(),
                'mime' => $this->attachment->getMimeType(),
            ]);
        }

        return $email;
    }
}
