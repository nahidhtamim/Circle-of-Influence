<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/author-image.png')}}">
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}" />
  </head>

  <body>
    <div id="page-wraper">

        <!-- Start Top Navbar  -->
        @include('layouts.includes.front.sidenav')
        <!-- End Top Navbar -->

        <!-- Start Main Content  -->
        @yield('contents')
        <!-- End Main Content  -->

  </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('frontend/js/isotope.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
  <script src="{{asset('frontend/js/lightbox.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
  {{-- <script>
    $(".main-menu li:first").addClass("active");

    var showSection = function showSection(section, isAnimate) {
      var direction = section.replace(/#/, ""),
        reqSection = $(".section").filter(
          '[data-section="' + direction + '"]'
        ),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $("body, html").animate(
          {
            scrollTop: reqSectionPos
          },
          800
        );
      } else {
        $("body, html").scrollTop(reqSectionPos);
      }
    };

    var checkSection = function checkSection() {
      $(".section").each(function() {
        var $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var currentId = $this.data("section"),
            reqLink = $("a").filter("[href*=\\#" + currentId + "]");
          reqLink
            .closest("li")
            .addClass("active")
            .siblings()
            .removeClass("active");
        }
      });
    };

    $(".main-menu").on("click", "a", function(e) {
      e.preventDefault();
      showSection($(this).attr("href"), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script> --}}
</body>
</html>
