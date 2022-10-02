@extends('layouts.userpage')

<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

   
  @include('layouts.inc.usidebar')

</div>
@section('content')

<<<<<<< HEAD
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-4">
              <div class="card ">
                  <div class="card-header ">
                      <h4 class="card-title">Email Statistics</h4>
                      <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-body ">
                      <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                      <div class="legend">
                          <i class="fa fa-circle text-info"></i> Open
                          <i class="fa fa-circle text-danger"></i> Bounce
                          <i class="fa fa-circle text-warning"></i> Unsubscribe
                      </div>
                      <hr>
                      <div class="stats">
                          <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-8">
              <div class="card ">
                  <div class="card-header ">
                      <h4 class="card-title">Users Behavior</h4>
                      <p class="card-category">24 Hours performance</p>
                  </div>
                  <div class="card-body ">
                      <div id="chartHours" class="ct-chart"></div>
                  </div>
                  <div class="card-footer ">
                      <div class="legend">
                          <i class="fa fa-circle text-info"></i> Open
                          <i class="fa fa-circle text-danger"></i> Click
                          <i class="fa fa-circle text-warning"></i> Click Second Time
                      </div>
                      <hr>
                      <div class="stats">
                          <i class="fa fa-history"></i> Updated 3 minutes ago
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card ">
                  <div class="card-header ">
                      <h4 class="card-title">2017 Sales</h4>
                      <p class="card-category">All products including Taxes</p>
                  </div>
                  <div class="card-body ">
                      <div id="chartActivity" class="ct-chart"></div>
                  </div>
                  <div class="card-footer ">
                      <div class="legend">
                          <i class="fa fa-circle text-info"></i> Tesla Model S
                          <i class="fa fa-circle text-danger"></i> BMW 5 Series
                      </div>
                      <hr>
                      <div class="stats">
                          <i class="fa fa-check"></i> Data information certified
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card  card-tasks">
                  <div class="card-header ">
                      <h4 class="card-title">Tasks</h4>
                      <p class="card-category">Backend development</p>
                  </div>
                  <div class="card-body ">
                      <div class="table-full-width">
                          <table class="table">
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" value="">
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" value="" checked>
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" value="" checked>
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                      </td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" checked>
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" value="">
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Read "Following makes Medium better"</td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" value="" disabled>
                                                  <span class="form-check-sign"></span>
                                              </label>
                                          </div>
                                      </td>
                                      <td>Unfollow 5 enemies from twitter</td>
                                      <td class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                              <i class="fa fa-edit"></i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                          </button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer ">
                      <hr>
                      <div class="stats">
                          <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>




   



@endsection
=======
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
>>>>>>> 23f1cc3bffc68c03a325bb09bc929727c91fa871
