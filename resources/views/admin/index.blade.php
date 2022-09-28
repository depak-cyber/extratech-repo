@extends('layouts.userpage')

@section('content')

<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our Products
          </h2>
       </div>
       @foreach ($testimonal as $testimonals)
       <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="box col-lg-10 mx-auto">
                   <div class="img_container">
                      <div class="img-box">
                         <div class="img_box-inner">
                            <img src="{{asset ('admin/images/'. $testimonals['image']) }}" alt="timage">
                         </div>
                      </div>
                   </div>
                   <div class="detail-box">
                      <h4>
                        {{$testimonals['title']}}
                      </h4>
                      <h6>
                        {{$testimonals['description']}}
                      </h6>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel_btn_box">
             <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
             <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
             <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
             <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
             <span class="sr-only">Next</span>
             </a>
          </div>
       </div>
       @endforeach
    </div>
 </section>
 <!-- end client section -->

  @endsection
