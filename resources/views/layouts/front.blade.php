<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Circle of Influence</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('frontend/assets/css/theme-1.css')}}">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Anthony's Blog</a></h1>

        <!-- Start SideNav  -->
        @include('layouts.includes.front.sidenav')
        <!-- End SideNav -->
    </header>
    
      <div class="main-wrapper">
        <!-- Start Main Content  -->
        @yield('contents')
        <!-- End Main Content  -->

    </div>


  </div>

	<!-- jQuery -->
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{asset('frontend/js/main.js')}}"></script>

	</body>
</html>
