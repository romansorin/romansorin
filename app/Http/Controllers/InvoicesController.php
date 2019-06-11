<?php

namespace romansorin\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('auth.admin.invoices.index');
    }

    public function create()
    {
        return view('auth.admin.invoices.index');        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Work $work)
    {
        return view('auth.admin.invoices.index');
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
