<?php

namespace romansorin\Http\Controllers;

use Illuminate\Http\Request;
use romansorin\User;

class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user_invoices = $customer->invoices();
        if (Auth::user()->is_admin) {
            return view('auth.admin.invoices.index', compact('invoices'));
        } else {
            return view('auth.users.invoices.index', compact('user_invoices'));
        }
    }

    public function create()
    {
        return view('auth.admin.invoices.index');        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($customer_id)
    {
        $user = User::where('stripe_id', $customer_id)->first();
        $invoices = $user->invoicesIncludingPending();
        return view('auth.admin.invoices.show', compact('invoices'));
    }

    public function edit(Work $work)
    {
        return view('auth.admin.invoices.index');        
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
