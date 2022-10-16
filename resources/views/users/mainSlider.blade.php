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

