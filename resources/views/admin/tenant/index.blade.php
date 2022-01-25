@extends('layouts.admin')

@section('title')
Tenants - Circle of Influence
@endsection

@section('contents')

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">List of Tenants</span>
                <ul class="nav nav-tabs"  style="float: right;">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('add-tenant')}}">
                      <i class="material-icons">add_circle</i> Add Tenant
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-center" id="tenants">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Tenant Name
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Meta Title
                  </th>
                  <th>
                    Meta Keywords
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach ($tenants as $tenant)
                  <tr>
                    <td>
                      {{$tenant->id}}
                    </td>
                    <td>
                      {{$tenant->tenant_name}}
                    </td>
                    <td>
                      {{$tenant->tenant_desc}}
                    </td>
                    <td>
                      {{$tenant->meta_tenant_title}}
                    </td>
                    <td>
                      {{$tenant->meta_tenant_keywords}}
                    </td>
                      @if($tenant->tenant_status == 1)
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
                        <a href="{{url('edit-tenant/'.$tenant->id)}}"><i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <a href="{{url('delete-tenant/'.$tenant->id)}}"><i class="material-icons">close</i></a>
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