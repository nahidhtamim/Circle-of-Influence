<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/author-image.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    
        body {
            background: linear-gradient(90deg, #0f8b5c 0%, #182848 100%);
        }
    
        .login {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
            font-family: 'Comfortaa', cursive;
        }
    
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            border-radius: 10px;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }
    
        .form input {
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            border-radius: 5px;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: 'Comfortaa', cursive;
        }
    
        .form input:focus {
            background: #dbdbdb;
        }
    
        .form button {
            font-family: 'Comfortaa', cursive;
            text-transform: uppercase;
            outline: 0;
            background: #0f8b5c;
            width: 100%;
            border: 0;
            border-radius: 5px;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
    
        .form button:active {
            background: #0f8b5c;
        }
    
        .form span {
            font-size: 75px;
            color: #0f8b5c;
        }
    
    </style>
    

</head>
<body>

    @yield('content')
    
</body>
</html>