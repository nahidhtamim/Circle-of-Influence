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
              <h4>What is Circle of Influence?</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque magni iure ex assumenda provident quod quia omnis nemo fugiat sint, nostrum deleniti, reprehenderit ut. Mollitia vero molestias explicabo. Voluptate, recusandae?
              </p>
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
              <h4>Sed sagittis rhoncus velit</h4>
              <p>
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Vestibulum fermentum
                eleifend nibh, vitae sodales elit finibus pretium.
                Suspendisse potenti. Ut sollicitudin risus a sollicitudin
                semper.
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