@extends('layouts.front')

@section('title')
Activity History - Circle Of Influence
@endsection

@section('contents')

<section class="section my-services" data-section="section2">
    <div class="container">
        <div class="section-heading">
            <h2>Your Previous Picks</h2>
            <div class="line-dec"></div>
            <span>Curabitur leo felis, rutrum vitae varius eu, malesuada a tortor.
                Vestibulum congue leo et tellus aliquam, eu viverra nulla semper.
                Nullam eu faucibus diam. Donec eget massa ante.</span>
        </div>
        <div class="row">
            <div class="col-md-12">
            <h3 class="text-center">List of Personal Influencers</h3>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">1st Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">2nd Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">3rd Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($influencers as $influencer)    
                        <tr>
                            <th scope="row">{{$influencer->id}}</th>
                            <td>{{$influencer->first_per_inf->username}}</td>
                            <td>{{$influencer->first_per_influencer_note}}</td>
                            <td>{{$influencer->second_per_inf->username}}</td>
                            <td>{{$influencer->second_per_influencer_note}}</td>
                            <td>{{$influencer->third_per_inf->username}}</td>
                            <td>{{$influencer->third_per_influencer_note}}</td>
                            <td>{{$influencer->created_at->format('d-M-Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
            <h3 class="text-center">List of Professional Influencers</h3>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">1st Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">2nd Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">3rd Influencer</th>
                            <th scope="col">Note</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($influencers as $influencer)    
                        <tr>
                            <th scope="row">{{$influencer->id}}</th>
                            <td>{{$influencer->first_pro_inf->username}}</td>
                            <td>{{$influencer->first_pro_influencer_note}}</td>
                            <td>{{$influencer->second_pro_inf->username}}</td>
                            <td>{{$influencer->second_pro_influencer_note}}</td>
                            <td>{{$influencer->third_pro_inf->username}}</td>
                            <td>{{$influencer->third_pro_influencer_note}}</td>
                            <td>{{$influencer->created_at->format('d-M-Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



@endsection