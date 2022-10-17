      <!-- services section -->
      <section class="why_section layout_padding">
        <div class="container">
           <div class="heading_container heading_center">
              <h2>
                 Our Services
              </h2>
              <div class="text-center"><p> Concise amalgamation of business & technology is of utmost importance for success of any business, and we understand this better than most.</p></div><br>
           </div>
           <div class="row">

            @foreach ($services as $service)

              <div class="col-md-4">
                 <div>
                    <div class="img-box">
                     <img src="/admin/icons/{{$service->icon}}" width="80" height="80" alt="srvtimg" class="img img-responsive">
                    </div>
                    <div>
                       <h5>
                        {{$service['name']}}
                       </h5>
                       <p>
                        {{$service['description']}}
                       </p>
                    </div>
                 </div>
              </div>

              @endforeach

           </div>
        </div>
     </section>
     <!-- end services section -->
