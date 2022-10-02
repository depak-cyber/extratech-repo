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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- styles -->
    <link  href="{{asset('admin/css/bootstrap5.css')}}" rel='stylesheet'>
    <link  href="{{asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel='stylesheet'>
    
    <link  href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel='stylesheet'>
   <!--End styles -->



</head>
<body>
    <div class="wrapper">
    
    <div class="main-panel">

    @include('layouts.inc.navbar')

     <div class='content'>

      @yield('content')
    </div>
</div>
@include('layouts.inc.footer')  
</div>

<!-- Scripts -->
<script src="//code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('admin/js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

   
   
    @yield('script')
</body>
</html>
