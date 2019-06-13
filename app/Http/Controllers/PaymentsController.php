<?php

namespace romansorin\Http\Controllers;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        \Stripe\Stripe::setApiKey(config('services')['stripe']['secret']);

    }

    public function index()
    {
        $payments = \Stripe\BalanceTransaction::all();

        return view('auth.admin.payments.index', compact('payments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Work $work)
    {
        //
    }

    public function edit(Work $work)
    {
        //
    }

    public function update(Request $request, Work $work)
    {
        //
    }

    public function destroy(Work $work)
    {
        //
    }
}
