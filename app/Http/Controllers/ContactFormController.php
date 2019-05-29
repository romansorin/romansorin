<?php

namespace romansorin\Http\Controllers;

use romansorin\ContactForm;
use Mail;
use Illuminate\Support\Facades\DB;
use romansorin\Mail\ContactFormSubmitted;

class ContactFormController extends Controller
{
    private $toMail = 'roman@romansorin.com';

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'user_message' => ['required', 'string']
        ]);
        DB::table('contact_form_submissions')->insert($attributes);

        Mail::to($this->toMail)->send(new ContactFormSubmitted(request()->all()));
        return back();
    }
}
