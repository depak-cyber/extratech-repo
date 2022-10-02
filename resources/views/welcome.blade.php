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
   <!--End styles -->
    

   <style>

    .slider-img{
      height:500px;
      width:1000px;
    }
    .color{
      background-color: rgb(10, 27, 10)
    }
    </style>

</head>
<body>
    <div class="wrapper">
        

        @if (Route::has('login'))
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a class="navbar-brand" href="#">Extratech</a>
            </div>   
            <ul class="navbar-nav">
                
            @auth
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link underline">Home</a>
            </li>
                @else
                <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link underline">Log in</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link underline">Register</a>
                </li>
                    @endif
            @endauth
            </ul>
            </nav>
    @endif
    





  
@php( $data = \App\Models\Image::all())

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    @foreach($data as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <img class='d-block w-100 slider-img' src="/uploads/{{$item->image}}" >
      <div class='carousel-caption color'>
      <h4>{{$item['image']}}</h4>
      <p>{{$item['id']}}</p>
      </div>
    </div>
    @endforeach
    
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>



  <form action="{{url('admin/index')}}" method='POST' enctype='multipart/form-data'>
  @csrf
<div class='div_design'>
  <label>Product image</label>
  <input type='file'  name='image' >
</div>
<div class='div_design' >
  
  <input type='submit'  value='Add Product' class='btn btn-primary' >
</div>

</form>
</div>
<script src="{{asset('admin/js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('admin/js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>

