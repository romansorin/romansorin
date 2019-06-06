@extends('layouts.app')

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
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" type="text"
                            placeholder="Your name" value="{{ old('name') }}" required aria-required="true">
                    </div>
                    @if ($errors->has('name'))
                    <p class="help is-danger" role="alert">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="email"
                            placeholder="you@email.com" value="{{ old('email') }}" required aria-required="true">
                    </div>
                    @if ($errors->has('email'))
                    <p class="help is-danger" role="alert">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label" for="password">Password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password"
                            type="password" placeholder="Password" required aria-required="true">
                    </div>
                    @if ($errors->has('password'))
                    <p class="help is-danger" role="alert">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label" for="password_confirmation">Confirm password</label>
                    <div class="control">
                        <input class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}"
                            name="password_confirmation" type="password" placeholder="Confirm password" required
                            aria-required="true">
                    </div>
                    @if ($errors->has('password_confirmation'))
                    <p class="help is-danger" role="alert">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        {{-- Use Bulma extension checkbox here --}}
                        <label class="checkbox">
                            <input type="checkbox" required aria-required="true">
                            I agree to the <a href="#">terms and conditions</a>.
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection