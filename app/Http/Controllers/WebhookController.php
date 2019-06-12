<?php

namespace romansorin\Http\Controllers;

use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;
use Illuminate\Http\JsonResponse;

class WebhookController extends CashierController
{
    /**
     * Handle successful customer creation
     *
     * @param  array  $payload
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handleCustomerCreated($payload)
    {
        return response('Good!', 200);
    }
}