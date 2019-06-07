@extends('layouts.auth')

@section('content')
<section class="section">
    <div class="container">
        <div class="box">
            <h1 class="title">{{ __('Reset Password') }}</h1>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="field">
                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                            name="email" value="{{ $email ?? old('email') }}" required autofocus>

                    </div>
                    @if ($errors->has('email'))
                    <p class="help is-danger" role="alert">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label for="password" class="label">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <p class="help is-danger" role="alert">{{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                    <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation"
                            required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection