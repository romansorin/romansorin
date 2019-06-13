<?php

namespace romansorin\Http\Controllers;

use romansorin\User;

class UsersController extends Controller
{
    // Need views for these and also validation.
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except('edit', 'delete', 'update');
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
        if (Auth::user()->is_admin) {
            return view('auth.admin.users.edit', compact('user'));
        } else {
            return view('auth.user.users.edit', compact('user'));
        }
    }

    public function update($id)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique']
        ]);
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
    }
}
