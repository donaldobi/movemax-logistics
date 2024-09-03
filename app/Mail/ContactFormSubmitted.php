<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactForm;


class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(ContactForm $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->view('emails.contact_form_submitted')
                    ->subject('New Contact Form Submission');
    }
}