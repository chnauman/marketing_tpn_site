<!DOCTYPE html>
<!-- saved from url=(0045)https://demos.farrukhwaseem.com/print-nation/ -->
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="Content-Language" content="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google font CDN -->
        <link href="{{ asset('css/css2') }}" rel="stylesheet">
        <!-- Bootstrap stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- Custom stylesheets -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
        <!-- Favicon placed here -->
        <link href="{{ asset('images/blog-category-img2.png') }}" rel="shortcut icon" type="image/x-icon">
        <title>The Print Nation</title>
    </head>
    <body>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
    </body>
</html>
