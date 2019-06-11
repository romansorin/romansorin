@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="box">
            <h1 class="title">Dashboard</h1>
            @if (session('status'))
            <div class="notification is-success" role="alert">
                <button class="delete"></button>
                {{ session('status') }}
            </div>
            @endif
            <h2 class="subtitle">You are logged in!</h2>
        </div>
    </div>
</section>
@endsection
