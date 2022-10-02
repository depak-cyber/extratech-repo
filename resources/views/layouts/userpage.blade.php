<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="csrf-token" content="{{csrf_token()}}">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="frontend/home/images/favicon.png" type="">
      <title>Home Page</title>

      <!--Linking Personal Css-->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!--End Linking Personal Css-->

      <!--Ajax link-->
      <link rel="stylesheet" href="https:://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
      <!--End Ajax link-->
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="frontend/home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="frontend/home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="frontend/home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="frontend/home/css/responsive.css" rel="stylesheet" />

<!--admin page links-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- styles -->
    <link  href="{{asset('admin/css/bootstrap5.css')}}" rel='stylesheet'>
    <link  href="{{asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel='stylesheet'>
   <!--End styles -->
<!--End admin page links-->


   </head>
   <body>
      <div class="hero_area">

        <div class="main-panel">

            @include('layouts.inc.navbar')

            @include('layouts.inc.testimonals')

             <div class='content'>
              @yield('content')
            </div>
        </div>

        <div class="wrapper">
            <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

              @include('layouts.inc.sidebar')

            </div>

            @include('layouts.inc.footer')
      </div>

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By ET</p>
      </div>

      <!-- jQery -->
      <script src="frontend/home/js/jquery-3.4.1.min.js"></script>
      <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
      <!-- popper js -->
      <script src="frontend/home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="frontend/home/js/bootstrap.js"></script>
      <!--Jquery link-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous";>
      </script>
      <!--End Jquery link-->
      @stack('javascript')


      <!--admin page links-->
      <script src="{{asset('admin/js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>

      <script src="{{asset('admin/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

      <script src="{{asset('admin/js/popper.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!--End admin page links-->
   </body>
</html>
