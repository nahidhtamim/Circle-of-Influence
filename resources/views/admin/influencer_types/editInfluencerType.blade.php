@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Influencer Type</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <form action="{{url('update-influencer-type/'.$influencer_type->id)}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Influencer Type</label>
                        <input type="text" class="form-control" name="influencer_type" value="{{$influencer_type->influencer_type}}">
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <label class="">Status</label>
                        <input type="checkbox" class="form-control" name="type_status" {{$influencer_type->type_status == "1" ? 'checked':''}}>
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