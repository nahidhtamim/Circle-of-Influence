@extends('layouts.front')

@section('title')
Pick Influencers - Circle Of Influence
@endsection

@section('contents')
<section class="section contact-me" data-section="section4">
    <div class="container">
        <div class="section-heading">
            <h2>Influencers</h2>
            <div class="line-dec"></div>
            <span>Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
                efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit.</span>
        </div>
        <form id="contact" action="{{ url('/save-influencers') }}" method="POST">
            @csrf
            <div class="row text-center">
                <div class="col-md-12">
                    <h3 class="text-center">Pick 3 Personal & 3 Professional Influencers</h3>
                    <hr>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered" id="influencer_table">
                        <a class="text-light btn btn-success add_row pull-left" id="add_row" style="text-decoration: none;"> <i class="fa fa-plus-square"></i> </a>
                        <a class="text-light btn btn-danger delete_row pull-right" style="text-decoration: none;"> <i class="fa fa-minus-square"></i> </a>
                        <thead>
                            <tr>
                                <th>Influencer Type</th>
                                <th>Influencers List</th>
                                <th>Influencer Note</th>
                                
                            </tr>
                        </thead>
                        <tbody id="data_row">
                            <tr id="influencer_row0">
                                <input type="hidden" class="form-control" id="subject" name="influencer_no[]" value="">

                                <td>
                                    <select id="inputState" class="form-control" name="type_id[]">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->influencer_type }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select id="inputState" class="form-control" name="influencer_id[]" required>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name }}
                                                {{ $user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <textarea name="influencer_note[]" rows="1" class="form-control" id="message"
                                        placeholder="Add Note About The Influencer" required=""></textarea>
                                </td>
                            </tr>
                            <tr id="influencer_row1"></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="button">
                        Save
                    </button>
                </fieldset>
            </div>
        </form>
    </div>
</section>

@endsection
