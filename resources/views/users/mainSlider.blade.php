{{--   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

          <div class="carousel-inner">

            @foreach ($sliders as $key=> $sliderItem )

            <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                @if ($sliderItem ->heading)
                <img src="/frontend/images/{{$sliderItem->image}}" alt="tsttimg">
                @endif
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$sliderItem ->heading}}</h5>
                <h3>{{$sliderItem ->subheading}}</h3>
                <p> {{$sliderItem ->paragrapsh}}</p>
              </div>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> --}}


            <!-- slider section -->
            <section class="slider_section ">

                @foreach ($sliders as $key=> $sliderItem )

                <div class="slider_bg_box">

                    @if ($sliderItem ->heading)
                    <img src="/frontend/images/{{$sliderItem->image}}" alt="tsttimg">
                    @endif
                </div>

                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">

                      <div class="carousel-item {{$key == 0 ? 'active':'' }}">

                         <div class="container ">
                            <div class="row">
                               <div class="col-md-7 col-lg-6 ">
                                  <div class="detail-box">
                                     <h1>
                                        <span>
                                            {{$sliderItem ->heading}}
                                        </span>
                                        <br>
                                        {{$sliderItem ->subheading}}
                                     </h1>
                                      <p class="text-white">
                                        {{$sliderItem ->paragraph}}
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach
                   <div class="container">
                      <ol class="carousel-indicators">
                         <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                         <li data-target="#customCarousel1" data-slide-to="1" ></li>
                         <li data-target="#customCarousel1" data-slide-to="2" ></li>
                      </ol>
                   </div>
                </div>
             </section>
             <!-- end slider section -->
