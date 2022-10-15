         <!-- slider section -->
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

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
        </div>

         <!-- end slider section -->

        {{--  <div class="carousel-caption d-none d-md-block">
            <div class="custom-carousel-content">
                <h1>
                    <span>Best Ecommerce Solutions 1 </span>
                    to Boost your Brand Name &amp; Sales
                </h1>
                <p>
                    We offer an industry-driven and successful digital marketing strategy that helps our clients
                    in achieving a strong online presence and maximum company profit.
                </p>
                <div>
                    <a href="#" class="btn btn-slider">
                        Get Now
                    </a>
                </div>
            </div>
        </div> --}}
