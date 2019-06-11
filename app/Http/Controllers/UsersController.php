<?php

namespace romansorin\Http\Controllers;

use romansorin\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $users = User::simplePaginate(15);
        return view('auth.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('auth.admin.users.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique']
        ]);
        User::create($attributes);
        return back()->with('status', 'User successfully created.');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->get();
        return view('auth.admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->get();
        return view('auth.admin.users.edit', compact('user'));
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
