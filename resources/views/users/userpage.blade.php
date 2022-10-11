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
   </head>
   <body>
    @include('sweetalert::alert')

      <div class="hero_area">

       @include('users.header')

       @include('users.slider')

      </div>

      @include('users.product')

      @include('users.featured_fav')

      @include('users.footer')

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
   </body>
</html>
