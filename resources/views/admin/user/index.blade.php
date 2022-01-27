@extends('layouts.admin')

@section('title')
Users - Circle of Influence
@endsection

@section('contents')

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">Lists:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                    <i class="material-icons">groups</i> All
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#messages" data-toggle="tab">
                                    <i class="material-icons">people</i> Personal Influencers
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">
                                    <i class="material-icons">people_alt</i> Professional Influencers
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <div class="table-responsive">
                            <table class="table text-center" id="users_table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        First Name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Mobile
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Tenant
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{ $user->first_name }}
                                            </td>
                                            <td>
                                                {{ $user->last_name }}
                                            </td>
                                            <td>
                                                {{ $user->username }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->mobile }}
                                            </td>
                                            <td>
                                                {{ $user->address }}
                                            </td>
                                            {{-- User Role --}}
                                            @if($user->role_as == 1)
                                                <td class="text-primary">
                                                    Admin<button rel="tooltip" title="Swap User Role"
                                                        class="btn btn-primary btn-link btn-sm" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <a
                                                            href="{{ url('change-user-role/'.$user->id) }}"><i
                                                                class="material-icons">published_with_changes</i></button></a>
                                                </td>
                                            @else
                                                <td class="text-success">
                                                    Influencer<button rel="tooltip" title="Swap User Role"
                                                        class="btn btn-primary btn-link btn-sm" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        <a
                                                            href="{{ url('change-user-role/'.$user->id) }}"><i
                                                                class="material-icons">published_with_changes</i></button></a>
                                                </td>
                                            @endif
                                            {{-- User Tenant -- --}}
                                            <td class="text-primary">
                                                {{ $user->userTenant->tenant_name }}<button rel="tooltip"
                                                    title="Edit User Tenant" class="btn btn-primary btn-link btn-sm"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    <i class="material-icons">edit</i></button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Change
                                                                    Tenant</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ url('update-user-tenant/'.$user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <select id="inputState" class="form-control"
                                                                                name="tenant_id">
                                                                                <option selected>Select a Tenant
                                                                                </option>
                                                                                @foreach($tenants as $tenant)
                                                                                    <option value="{{ $tenant->id }}">
                                                                                        {{ $tenant->tenant_name }}
                                                                                    </option>
                                                                                @endforeach

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </td>
                                            {{-- <td class="td-actions text-center">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" >
                                                <a href="{{ url('edit-user/'.$user->id) }}"><i class="material-icons">edit</i></a>
                                              </button>
                                            </td> --}}
                                            <td class="text-primary">
                                                <button type="button" rel="tooltip" title="Edit User Tenant" class="btn btn-primary btn-link btn-sm">
                                                    <a href="{{ url('edit-user/'.$user->id) }}"><i class="material-icons">edit</i></a></button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages">
                        <div class="table-responsive">

                            <table class="table text-center" id="personal_influencers_table">
                                <thead class=" text-primary">
                                    <th>
                                        SL.
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Activity ID
                                    </th>
                                    <th>
                                        Activity
                                    </th>
                                    <th>
                                        Tenant
                                    </th>
                                    <th>
                                        User's Name
                                    </th>
                                    <th>
                                        User's Mobile
                                    </th>
                                    
                                    <th>
                                        Influencer Type
                                    </th>
                                    <th>
                                        Influencer Name
                                    </th>
                                    <th>
                                        Note
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($personal_influencers as $personal)
                                        <tr>
                                            <td>{{ $personal->id }}</td>
                                            <td>{{date_format($personal->selection->created_at,"Y-M-d")}}</td>
                                            <td>{{ $personal->selection->id }}</td>
                                            <td>{{ $personal->selection->activity_name }}</td>
                                            <td>
                                                {{$personal->user_inf->tenant_id}}
                                            </td>
                                            {{-- <td>{{ $personal->user_inf->tenant_id }}</td> --}}
                                            <td>{{ $personal->user_inf->first_name }} {{ $personal->user_inf->last_name }}</td>
                                            <td>{{ $personal->user_inf->mobile }}</td>
                                            <td>{{ $personal->type->influencer_type }}</td>
                                            <td>{{ $personal->influencer->first_name }} {{ $personal->influencer->last_name }}</td>
                                            <td>{{ $personal->influencer_note }}</td>
                                            <td class="text-primary">
                                              <button type="button" rel="tooltip" title="View User Personal Influencers" class="btn btn-primary btn-link btn-sm" >
                                                <a href="{{ url('edit-user/'.$user->id) }}"><i class="material-icons">visibility</i></a>
                                              </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings">
                        <table class="table text-center" id="professional_influencers_table">
                            <thead class="text-primary">
                                <th>
                                    SL.
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Activity ID
                                </th>
                                <th>
                                    Activity
                                </th>
                                <th>
                                    User's Name
                                </th>
                                <th>
                                    User's Mobile
                                </th>
                                
                                <th>
                                    Influencer Type
                                </th>
                                <th>
                                    Influencer Name
                                </th>
                                <th>
                                    Note
                                </th>
                                <th>
                                    Action
                                </th>
                            </thead>
                            <tbody>
                                @foreach($professional_influencers as $professional)
                                    <tr>
                                        <td>{{ $professional->id }}</td>
                                        <td>{{date_format($professional->selection->created_at,"Y-M-d")}}</td>
                                        <td>{{ $professional->selection->id }}</td>
                                        <td>{{ $professional->selection->activity_name }}</td>
                                        <td>{{ $professional->user_inf->first_name }} {{ $professional->user_inf->last_name }}</td>
                                        <td>{{ $professional->user_inf->mobile }}</td>
                                        <td>{{ $professional->type->influencer_type }}</td>
                                        <td>{{ $professional->influencer->first_name }} {{ $professional->influencer->last_name }}</td>
                                        <td>{{ $professional->influencer_note }}</td>
                                        <td class="text-primary">
                                          <button type="button" rel="tooltip" title="View User Personal Influencers" class="btn btn-primary btn-link btn-sm" >
                                            <a href="{{ url('edit-user/'.$user->id) }}"><i class="material-icons">visibility</i></a>
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

        <div class="csv-button text-center">
            <button type="button" class="btn btn-primary"> <a class=" text-light"
                    href="{{ url('/user-influencers/export-personal') }}">CSV
                    Personal</a></button>
            <button type="button" class="btn btn-primary"><a class=" text-light"
                    href="{{ url('/user-influencers/export-professional') }}">CSV
                    Professional</a></button>
        </div>
    </div>
</div>

    @endsection
