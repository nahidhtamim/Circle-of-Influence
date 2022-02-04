@extends('layouts.admin')

@section('title')
{{ Auth::user()->username }} - Circle Of Influence
@endsection

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Update Details</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <form action="{{url('update-admin-profile/'.$profile->id)}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$profile->first_name}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="last_name" value="{{$profile->last_name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username" value="{{$profile->username}}" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" value="{{$profile->email}}" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile</label>
                          <input type="text" class="form-control" name="mobile" value="{{$profile->mobile}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="address" value="{{$profile->address}}">
                        </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                  <div class="clearfix"></div>
                </form>
                <br>
                <br>
                {{-- ================================Password Update form starts========================== --}}
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Update Password</h4>
                    <p class="card-category"></p>
                </div>
                <br>
                <form id="contact" action="{{url('update-admin-password/'.$profile->id)}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" placeholder="Enter New Password">
                      </div>
                      <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <div class="clearfix"></div>
                  </form>
                  {{-- ================================Password Update form Ends========================== --}}
              </div>
            </div>
          </div>
    </div>

@endsection
