@extends('layouts.app')

@section('title')
Forgot Password? - Circle of Influence
@endsection

@section('content')

<div class="login">
    <div class="form">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="row mb-3">
                <label for="email"
                    class="col-md-12 col-form-label text-md-end">{{ __('Please enter the email address below to generate a reset link for your password. A email will be sent to your given email address.') }}</label>
                <br>
                <br>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus placeholder="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                    <br>
                    <br>
                    <a class="btn btn-link"
                        href="{{ route('login') }}">{{ __('Log In') }}</a>
                    <br>
                    <br>
                    <a class="btn btn-link"
                        href="{{ url('/') }}">{{ __('Back to Index') }}</a>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
