@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Add Influencer Type</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <form action="{{url('save-influencer-type')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Influencer Type</label>
                        <input type="text" class="form-control" name="influencer_type">
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <label class="">Status</label>
                        <input type="checkbox" class="form-control" name="type_status">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Save Influencer Type</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
    </div>

@endsection