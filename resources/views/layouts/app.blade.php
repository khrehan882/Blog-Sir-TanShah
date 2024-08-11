<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

   <!-- Dependency Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('dependencies/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('dependencies/animate/animate.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('dependencies/swiper/css/swiper.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}">

   <!-- Site Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">


</head>
<body>
    <div id="app">
        @include("sections.menu")
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Dependency Scripts -->
   <script src="{{asset('dependencies/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('dependencies/popper.js/popper.min.js')}}"></script>
   <script src="{{asset('dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('dependencies/appear/appear.min.js')}}"></script>
   <script src="{{asset('dependencies/swiper/js/swiper.min.js')}}"></script>
   <script src="{{asset('dependencies/masonry/masonry.min.js')}}"></script>
   <script src="{{asset('dependencies/magnific-popup/js/magnific-popup.min.js')}}"></script>
   <script src="{{asset('dependencies/theia-sticky-sidebar/resize-sensor.min.js')}}"></script>
   <script src="{{asset('dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
   <script src="{{asset('dependencies/validator/validator.min.js')}}"></script>
   <script src="{{asset('dependencies/tween-max/tween-max.js')}}"></script>
   <script src="{{asset('dependencies/wow/js/wow.min.js')}}"></script>

   <!-- custom -->
   <script src="{{asset('assets/js/app.js')}}"></script>
   
</body>
</html>
