<?php

namespace romansorin;

use Illuminate\Database\Eloquent\Model;
use romansorin\Mail\InvoiceDueSoon;
use Illuminate\Support\Facades\Mail;

class Invoice extends Model
{
    protected $guarded = [];

    public function send()
    {
        Mail::to('israeliloba@gmail.com')->send(new InvoiceDueSoon());
    }
}
