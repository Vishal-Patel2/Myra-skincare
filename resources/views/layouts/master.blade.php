<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Myra Skincare')</title>
     <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .cart-icon-wrapper {
            position: relative;
            display: inline-block;
            font-size: 20px;
            color: #333;
        }

        .count-box {
            position: absolute;
            top: 5px;
            right: -5px;
            background: #151926;
            color: white;
            font-size: 10px;
            font-weight: bold;
            border-radius: 50%;
            padding: 4px 4px;
            line-height: 1;
            min-width: 18px;
            text-align: center;
            box-shadow: 0 0 0 1px #fff;
            /* white border for clarity */
        }
    </style>

    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header, footer { background-color: #f8f8f8; padding: 20px; text-align: center; }
        .content { padding: 30px; }
    </style>
</head>
<body>
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>

