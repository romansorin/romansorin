<?php

namespace romansorin\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceDueSoon extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            'name' => 'Israel Iloba',
            'total' => '6.41',
            'due_date' => 'Sep 6, 2019',
            'url' => 'https://pay.stripe.com/invoice/invst_AmsKkgaBZKcVAgnD3UPBeHiY4c',
            'support' => 'support@romansorin.com',
            'action_url' => 'https://pay.stripe.com/invoice/invst_AmsKkgaBZKcVAgnD3UPBeHiY4c'
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('billing@romansorin.com', 'rs Billing')->subject('Notice: Invoice Due Soon')->markdown('markdown.invoiceDueSoon')->with($this->data);
    }
}
