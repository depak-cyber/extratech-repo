
            <!-- slider section -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                  @foreach ($sliders as $key=> $sliderItem )

                  <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                      @if ($sliderItem ->image)
                      <img class="img-fluid" src="/frontend/images/{{$sliderItem->image}}" alt="tsttimg">
                      @endif

                      <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content ">
                            <h1>
                                {{$sliderItem ->heading}}
                            </h1>
                            <h2>
                                {{$sliderItem ->subheading}}
                            </h2>
                            <p>
                                {{$sliderItem ->paragraph}}
                            </p>
                        </div>
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



