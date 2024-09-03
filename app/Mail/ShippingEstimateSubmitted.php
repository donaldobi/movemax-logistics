<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ShippingEstimate;


class ShippingEstimateSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $estimate;

    public function __construct(ShippingEstimate $estimate)
    {
        $this->estimate = $estimate;
    }

    public function build()
    {
        return $this->view('emails.shipping_estimate_submitted')
                    ->subject('New Shipping Estimate Submitted');
    }
}