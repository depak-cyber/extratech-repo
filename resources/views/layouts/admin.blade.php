<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- styles -->
    <link  href="{{asset('admin/css/bootstrap.min.css')}}" rel='stylesheet'>
    <link  href="{{asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel='stylesheet'>
    <script src="{{asset('admin/js/jquery-3.6.1.min.js')}}"></script>
   <!--End styles -->



</head>
<body>
    <div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

      @include('layouts.inc.sidebar')

    </div>
    <div class="main-panel">

    @include('layouts.inc.navbar')

     <div class='content'>

      @yield('content')
    </div>
</div>
    @include('layouts.inc.footer')
</div>

<!-- Scripts -->
    <script src="{{asset('admin/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
