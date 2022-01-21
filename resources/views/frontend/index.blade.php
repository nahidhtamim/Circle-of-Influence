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

  {{-- <section class="section my-services" data-section="section2">
    <div class="container">
      <div class="section-heading">
        <h2>What I’m good at?</h2>
        <div class="line-dec"></div>
        <span
          >Curabitur leo felis, rutrum vitae varius eu, malesuada a tortor.
          Vestibulum congue leo et tellus aliquam, eu viverra nulla semper.
          Nullam eu faucibus diam. Donec eget massa ante.</span
        >
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="service-item">
            <div class="first-service-icon service-icon"></div>
            <h4>HTML5 &amp; CSS3</h4>
            <p>
              Phasellus non convallis dolor. Integer tempor hendrerit arcu
              at bibendum. Sed ac ante non metus vehicula congue quis eget
              eros.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-item">
            <div class="second-service-icon service-icon"></div>
            <h4>Creative Ideas</h4>
            <p>
              Proin lacus massa, eleifend sed fermentum in, dignissim vel
              metus. Nunc accumsan leo nec felis porttitor, ultricies
              faucibus purus mollis.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-item">
            <div class="third-service-icon service-icon"></div>
            <h4>Easy Customize</h4>
            <p>
              Integer suscipit condimentum aliquet. Nam quis risus metus.
              Nullam faucibus quam eget arcu pretium tincidunt. Nam libero
              dui.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-item">
            <div class="fourth-service-icon service-icon"></div>
            <h4>Admin Dashboard</h4>
            <p>
              Vivamus et dui a massa venenatis fringilla. Proin lacus massa,
              eleifend sed fermentum in, dignissim vel metus. Nunc accumsan
              leo nec felis porttitor.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="section my-work" data-section="section3">
    <div class="container">
      <div class="section-heading">
        <h2>My Work</h2>
        <div class="line-dec"></div>
        <span
          >Aenean sollicitudin ex mauris, lobortis lobortis diam euismod sit
          amet. Duis ac elit vulputate, lobortis arcu quis, vehicula
          mauris.</span
        >
      </div>
      <div class="row">
        <div class="isotope-wrapper">
          <form class="isotope-toolbar">
            <label
              ><input
                type="radio"
                data-type="*"
                checked=""
                name="isotope-filter"
              />
              <span>all</span></label
            >
            <label
              ><input
                type="radio"
                data-type="people"
                name="isotope-filter"
              />
              <span>people</span></label
            >
            <label
              ><input
                type="radio"
                data-type="nature"
                name="isotope-filter"
              />
              <span>nature</span></label
            >
            <label
              ><input
                type="radio"
                data-type="animals"
                name="isotope-filter"
              />
              <span>animals</span></label
            >
          </form>
          <div class="isotope-box">
            <div class="isotope-item" data-type="nature">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-01.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-01.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>First Title</h4>
                  <span>free to use our template</span>
                </figcaption>
              </figure>
            </div>

            <div class="isotope-item" data-type="people">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-02.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-02.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>Second Title</h4>
                  <span>please tell your friends</span>
                </figcaption>
              </figure>
            </div>

            <div class="isotope-item" data-type="animals">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-03.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-03.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>Item Third</h4>
                  <span>customize anything</span>
                </figcaption>
              </figure>
            </div>

            <div class="isotope-item" data-type="people">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-04.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-04.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>Item Fourth</h4>
                  <span>Re-distribution not allowed</span>
                </figcaption>
              </figure>
            </div>

            <div class="isotope-item" data-type="nature">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-05.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-05.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>Fifth Awesome</h4>
                  <span>Ut sollicitudin risus</span>
                </figcaption>
              </figure>
            </div>

            <div class="isotope-item" data-type="animals">
              <figure class="snip1321">
                <img
                  src="{{asset('frontend/images/portfolio-06.jpg')}}"
                  alt="sq-sample26"
                />
                <figcaption>
                  <a
                    href="{{asset('frontend/images/portfolio-06.jpg')}}"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                  ></a>
                  <h4>Awesome Sixth</h4>
                  <span>Donec eget massa ante</span>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact-me" data-section="section4">
    <div class="container">
      <div class="section-heading">
        <h2>Contact Me</h2>
        <div class="line-dec"></div>
        <span
          >Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
          efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
          sit amet, consectetur adipiscing elit.</span
        >
      </div>
      <div class="row">
        <div class="right-content">
          <div class="container">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input
                      name="name"
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your name..."
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input
                      name="email"
                      type="text"
                      class="form-control"
                      id="email"
                      placeholder="Your email..."
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input
                      name="subject"
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject..."
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="message"
                      rows="6"
                      class="form-control"
                      id="message"
                      placeholder="Your message..."
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

@endsection