@extends('layouts.app')

@section('title')
Register - Circle of Influence
@endsection

@section('content')
<div class="login">
    <div class="form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <i class="material-icons" style="color: #0f8b5c; font-size: 75px;">person_add</i>
            <br>
            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                        name="first_name" value="{{ old('first_name') }}" required
                        autocomplete="first_name" placeholder="first name" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                        name="last_name" value="{{ old('last_name') }}" required
                        autocomplete="last_name" placeholder="last name" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username"
                        placeholder="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror"
                        name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile"
                        placeholder="mobile" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address"
                        placeholder="address" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="enter password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="confirm password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
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

{{-- 
@extends('layouts.app')

@section('title')
Register - Circle of Influence
@endsection

@section('content')

<div class="login">
    <div class="form">
        <form method="POST" action="{{ route('register') }}">
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
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        required autocomplete="current-password" placeholder="password" required>

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
    @if(Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    <br>
    <br>
    <a class="btn btn-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    <br>
    <br>
    <a class="btn btn-link"
        href="{{ url('/') }}">{{ __('Back to Index') }}</a>
</div>

</form>
</div>
</div>

@endsection--}}
