@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Login</h1>
        <h2 class="subtitle">Login to your existing account.</h2>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="box">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" id="email" name="email"
                            type="email" placeholder="you@email.com" value="{{ old('email') }}" required
                            aria-required="true">
                    </div>
                    @if ($errors->has('email'))
                    <p class="help is-danger" role="alert">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label" for="password">Password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" id="password"
                            name="password" type="password" placeholder="Password" required aria-required="true">
                    </div>
                    @if ($errors->has('password'))
                    <p class="help is-danger" role="alert">{{ $errors->first('password') }}</p>
                    @endif
                </div>


                <div class="field">
                    <input class="is-checkradio" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }} aria-required="false">
                    <label class="is-marginless" for="remember">Remember Me</label>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Login</button>
                    </div>
                    @if (Route::has('password.request'))
                    <div class="control">
                        <a class="button is-text" id="forgot-password" href="{{ route('password.request') }}">Forgot
                            Your Password?</a>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
