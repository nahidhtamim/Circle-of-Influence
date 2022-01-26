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


    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    {{-- <script>
        $(document).ready(function () {
            $(".add_row").click(function (e) {
                e.preventDefault();
                $("#data_row").prepend(`<tr id="table_row">
                                <input type="hidden" class="form-control" id="subject" name="influencer_no[]" value="">
                                <td>
                                    <select id="inputState" class="form-control" name="type_id[]">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->influencer_type }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select id="inputState" class="form-control" name="influencer_id[]" required>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name }}
                                                {{ $user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <textarea name="influencer_note[]" rows="1" class="form-control" id="message"
                                        placeholder="Add Note About The Influencer" required=""></textarea>
                                </td>
                                <td>
                                    <a class="text-light btn btn-danger delete_row" style="text-decoration: none;"> <i class="fa fa-minus-square"></i> </a>
                                </td>
                            </tr>`);
            });

            $(document).on('click', '.delete_row', function (e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });

    </script> --}}
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
</body>

</html>
