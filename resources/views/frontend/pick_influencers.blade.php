@extends('layouts.front')

@section('title')
Pick Influencers - Circle Of Influence
@endsection

@section('contents')
<section class="section contact-me" data-section="section4">
    <div class="container">
        <div class="section-heading">
            <h2>Pick Influencers</h2>
            <div class="line-dec"></div>
            <span>Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
                efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit.</span>
        </div>
        <form id="contact" action="{{url('/save-influencers')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Pick 3 Personal Influencers</h3>
                    <hr>
                    <div class="right-content">
                        <div class="container">
                            <div class="row">
                                {{-- First Personal Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="1">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option value="1" selected>Personal</option>
                                            <option disabled style="color: #f56b6b"> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <hr>
                                <hr>
                                {{-- Second Personal Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="2">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option value="1" selected>Personal</option>
                                            <option disabled style="color: #f56b6b"> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                {{-- Third Personal Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="3">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option value="1" selected>Personal</option>
                                            <option disabled style="color: #f56b6b"> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Pick 3 Professional Influencers</h3>
                    <hr>
                    <div class="right-content">
                        <div class="container">
                            <div class="row">
                                {{-- First Professional Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="1">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option disabled style="color: #f56b6b">Personal</option>
                                            <option value="2" selected> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <hr>
                                <hr>
                                {{-- Second Professional Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="2">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option disabled style="color: #f56b6b">Personal</option>
                                            <option value="2" selected> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                {{-- Third Professional Influencer Selector --}}
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="subject" name="influencer_no"
                                        value="3">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="type_id" aria-readonly="">
                                            <option disabled style="color: #f56b6b">Personal</option>
                                            <option value="2" selected> Professional </option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="influencer_id">
                                            <option selected>Pick Influencer</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="influencer_note" rows="1" class="form-control" id="message"
                                            placeholder="Add Note About The Influencer"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="button">
                            Save
                        </button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
