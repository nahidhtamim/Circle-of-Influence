@extends('layouts.front')

@section('title')
    Circle Of Influence
@endsection

@section('contents')

<section class="section about-me" data-section="section1">
    <div class="container">
      <div class="section-heading">
        <h2>Circle Of Influence</h2>
        <div class="line-dec"></div>
        <span
          >To be concerned with what you can do for myself, not be bothered with what others can do to prioritize your necessity</span
        >
      </div>
      <div class="left-image-post">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="{{asset('frontend/images/left-image.jpg')}}" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-text">
              <h4>What Is Circle Of Influence?</h4>
              <p>
                Your Circle of Influence are the things that concern you that you can do something about. For example – you may be worried about the economy or climate change or coronavirus (i.e. circle of concern), however what can you do about it (i.e. your circle of influence)?
              </p>
              {{-- <p>
              We can’t control the economy or a global pandemic. As we react, we tend to focus on the Circle of Concern, which depletes our energy, because we have no control over it. The energy focused on the Circle of Concern is negative. If you focus on the Circle of Concern and neglect the Circle of Influence, eventually the Circle of Influence will get smaller. This will add to feelings of stress and helplessness, because you cannot change anything in the Circle of Concern.
              </p> --}}
              <div class="white-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-image-post">
        <div class="row">
          <div class="col-md-6">
            <div class="left-text">
              <h4>What Do We Do?</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, assumenda incidunt aliquam architecto deleniti quo mollitia voluptatum omnis amet dolor! Optio excepturi veritatis aliquam animi? Autem voluptatem mollitia quos repellendus.
              </p>
              <div class="white-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('frontend/images/right-image.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection