<?php

namespace romansorin\Listeners;

use Illuminate\Auth\Events\Verified;

class AddStripeCustomerOnVerification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $event->user->createCustomer();
    }
}
