<?php

namespace romansorin\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('auth.users.index');
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
