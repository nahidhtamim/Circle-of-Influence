@extends('layouts.front')

@section('title')
{{ Auth::user()->username }} - Circle Of Influence
@endsection

@section('contents')



<section class="section contact-me" data-section="section4">
    <div class="container">
        <div class="section-heading">
            <h2>Edit Profile</h2>
            <div class="line-dec"></div>
            <span>Update Profile Info</span>
        </div>
        <div class="row">
            <div class="right-content">
                <div class="container">
                    <form id="contact" action="{{url('update-profile/'.$profile->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="first_name" type="text" class="form-control" id="first_name"
                                        value="{{$profile->first_name}}" required="" />
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="last_name" type="text" class="form-control" id="last_name"
                                    value="{{$profile->last_name}}" required="" />
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="username" type="text" class="form-control" id="username"
                                        value="{{$profile->username}}" required="" readonly/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                    value="{{$profile->email}}" required="" readonly/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="mobile" type="text" class="form-control" id="mobile"
                                        value="{{$profile->mobile}}" required="" />
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="address" type="text" class="form-control" id="address"
                                    value="{{$profile->address}}" required="" />
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">
                                        Update Info
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <div class="section-heading">
                        <span>Update Password</span>
                    </div>
                    <form id="contact" action="{{url('update-password/'.$profile->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Enter New Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- <input name="first_name" type="text" class="form-control" id="first_name"
                                        value="{{$profile->first_name}}" required="" /> --}}
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="Confirm Password">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">
                                        Update Password
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection