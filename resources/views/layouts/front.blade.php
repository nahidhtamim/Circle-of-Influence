<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/author-image.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/templatemo-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/lightbox.css') }}" />
    <!-- DataTables CSS Files -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

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
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    
    <script src="{{ asset('frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
  <script> 
    $(document).ready(function(){
      let row_number = 1;
      $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;
      $('#influencer_row' + row_number).html($('#influencer_row' + new_row_number).html()).find('td:first-child');
      $('#influencer_table').append('<tr id="influencer_row' + (row_number + 1) + '"></tr>');
      row_number++;
    });
  
      $(".delete_row").click(function(e){
        e.preventDefault();
        if(row_number > 1){
          $("#influencer_row" + (row_number - 1)).html('');
          row_number--;
        }
      });
    });
  </script> 
  <script>
    $(document).ready( function () {
        $('#influencers').DataTable({
         "pagingType": "full_numbers"
        });
    });
</script>
</body>

</html>
