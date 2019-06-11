@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Register</h1>
        <h2 class="subtitle">Sign-up to access all features of romansorin.com</h2>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="box">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label class="label" for="name">Name</label>
                    <div class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" id="name" name="name"
                            type="text" placeholder="Your name" value="{{ old('name') }}" required aria-required="true">
                    </div>
                    @if ($errors->has('name'))
                    <p class="help is-danger" role="alert">{{ $errors->first('name') }}</p>
                    @endif
                </div>

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
                    <label class="label" for="password-confirm">Confirm password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}"
                            name="password_confirmation" type="password" id="password-confirm"
                            placeholder="Confirm password" required aria-required="true">
                    </div>
                    @if ($errors->has('password_confirmation'))
                    <p class="help is-danger" role="alert">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <div class="field">
                    <input class="is-checkradio" id="tos" type="checkbox" name="tos" {{ old('tos') ? 'checked' : '' }}
                        required aria-required="true">
                    <label class="is-marginless" for="tos">I agree to the <a href="#">terms and conditions</a>.</label>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
