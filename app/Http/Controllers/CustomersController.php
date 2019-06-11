<?php

namespace romansorin\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        return view('auth.admin.customers.index');
    }

    public function create()
    {
        return view('auth.admin.customers.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Work $work)
    {
        return view('auth.admin.customers.show');
    }

    public function edit(Work $work)
    {
        return view('auth.admin.customers.edit');
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
