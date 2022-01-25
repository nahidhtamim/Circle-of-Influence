@extends('layouts.app')

@section('title')
Login - Circle of Influence
@endsection

@section('content')

<div class="login">
    <div class="form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <i class="material-icons" style="color: #0f8b5c; font-size: 75px;">lock</i>

            <div class="email_box">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="email" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="password_box">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="password" required>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="submit_btn">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
                <br>
                <br>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
                <br>
                <br>
                <a class="btn btn-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                <br>
                <br>
                <a class="btn btn-link" href="{{ url('/') }}">{{ __('Back to Index') }}</a>
            </div>

        </form>
    </div>
</div>

@endsection
