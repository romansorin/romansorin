@extends('layouts.auth')

@section('content')
<section class="section">
    <div class="container">
        <div class="box">
            <h1 class="title">Dashboard</h1>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <h2 class="subtitle">You are logged in!</h2>
        </div>
    </div>
</section>
@endsection
