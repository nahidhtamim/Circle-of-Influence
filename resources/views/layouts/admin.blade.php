<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />

</head>
<body class="">
    <div class="wrapper ">

        <!-- Start SideNav  -->
        @include('layouts.includes.admin.sidebar')
        <!-- End SideNav -->
        
      <div class="main-panel">

        <!-- Start Top Navbar  -->
        @include('layouts.includes.admin.navbar')
        <!-- End Top Navbar -->

        <div class="content">
          <div class="container-fluid">

            <!-- Start Main Content  -->
            @yield('contents')
            <!-- End Main Content  -->

          </div>
        </div>

        <!-- Start Footer  -->
        @include('layouts.includes.admin.footer')
        <!-- End Footer  -->
        
      </div>
    </div>



    <!--   Core JS Files   -->

    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('admin/js/plugins/sweetalert2.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->

    @if(session('status'))
      <script>
        swal("{{session('status')}}")
      </script>
    @endif
    <script>
      $('#exampleModal').on('show.bs.modal', function (e) {
        console.log('modal opened')
      })
      </script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    
 
</body>
</html>
