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
            <h3 class="text-center">List of Influencers</h3>
                <hr>
                <div class="table-responsive">
                    @if (count($influencers) !=0)
                    <table class="table text-center" id="influencers">
                        <thead class="">
                              <tr>
                                  <th>
                                      Activity
                                  </th>
                                  
                                  <th>
                                    Influencer SL
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
                                      Date
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($influencers as $influencer)
                                  <tr>
                                      <td>{{ $influencer->selection->activity_name }}</td>
                                      <td>{{ $influencer->influencer_no }}</td>
                                      <td>{{ $influencer->type->influencer_type }}</td>
                                      <td>{{ $influencer->influencer->first_name }} {{ $influencer->influencer->last_name }}</td>
                                      <td>{{ $influencer->influencer_note }}</td>
                                      <td>{{date_format($influencer->selection->created_at,"Y-M-d")}}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                    @else
                    <div class="card text-center text-dark">
                        <div class="card-header">
                            <h3>No data available</h3>
                        </div>
                    </div>
                   
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection