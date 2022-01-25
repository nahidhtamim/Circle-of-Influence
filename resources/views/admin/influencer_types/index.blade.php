@extends('layouts.admin')

@section('title')
Influencer Types - Circle of Influence
@endsection

@section('contents')

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">List of Influencer Types</span>
                <ul class="nav nav-tabs"  style="float: right;">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('add-influencer-type')}}">
                      <i class="material-icons">add_circle</i> Add Influencer Type
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-center" id="types">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Influencer Type
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach ($influencer_types as $type)
                  <tr>
                    <td>
                      {{$type->id}}
                    </td>
                    <td>
                      {{$type->influencer_type}}
                    </td>
                      @if($type->type_status == 1)
                      <td class="text-primary">
                        Active
                      </td>
                      @else
                      <td class="text-warning">
                        Deactive
                      </td>
                      @endif
                    
                    <td class="td-actions text-center">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" >
                        <a href="{{url('edit-influencer-type/'.$type->id)}}"><i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <a href="{{url('delete-influencer-type/'.$type->id)}}"><i class="material-icons">close</i></a>
                      </button>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection