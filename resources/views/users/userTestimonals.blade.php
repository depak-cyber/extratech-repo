
   <!-- client section -->
   <section class="client_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
            What our Clients say about Extratech
          </h2>
          <h4>Over 500+ Clients , Students and Growing</h4>
       </div>
       <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            @foreach ($testimonal as  $testimonals)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="box col-lg-10 mx-auto">
                   <div class="img_container">
                      <div class="img-box">
                         <div class="img_box-inner">
                            <img src="/admin/images/{{$testimonals->image}}" alt="tsttimg">
                         </div>
                      </div>
                   </div>
                   <div class="detail-box">
                      <h5>
                        {{$testimonals['title']}}
                      </h5>
                      <h6>
                        {{$testimonals['description']}}
                      </h6>
                   </div>
             </div>
             </div>
             @endforeach
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
    </div>
 </section>

 <!-- end client section -->
