<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">EXTRATECH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="nav-menu">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">

            @foreach ($navItems as $item )
            @if (count($item->subnavigation)>0)
            <li class="nav-item dropdown">
                <a class="nav-link route dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$item->name}}</a>
                <div class="dropdown-menu dropdown-menu-end fade-down dropdown-academy" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($item->subnavigation as $subnav)
                        <a class="dropdown-item" href="">{{$subnav->name}} </a>
                        <div class="dropdown-divider"></div>
                    @endforeach
               </div>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="#">{{$item->name}}</a>
              </li>
            @endif
            @endforeach

           {{--Lists for services
            <li class="nav-item dropdown">
                <a class="nav-link route dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu dropdown-menu-end fade-down dropdown-academy" aria-labelledby="navbarDropdownMenuLink">
                    <table class="table table-borderless">
                        <tr>
                          <th><a class="dropdown-item">Food</a></th>
                          <th><a class="dropdown-item">Health Care</a></th>
                        </tr>
                      <tr>
                        <td><a class="dropdown-item">Counselling</a></td>
                        <td><a class="dropdown-item" >School Supplies</a></td>
                      </tr>
                      <tr>
                        <td> <a class="dropdown-item" >Physical Activity</a></td>
                        <td><a class="dropdown-item" >The Arts</a></td>
                      </tr>
                      <tr>
                        <td> <a class="dropdown-item">Social Work</a></td>
                      </tr>
                </table>
               </div>
            </li>

          {{--Lists for Academy
          <li class="nav-item dropdown">
            <a class="nav-link route dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACADEMY</a>
            <div class="dropdown-menu dropdown-menu-end fade-down dropdown-academy" aria-labelledby="navbarDropdownMenuLink">
                <table class="table table-borderless">
                    <tr>
                      <th><a class="dropdown-item" >Network &amp; System Support</a></th>
                      <th><a class="dropdown-item" >Data Analytics</a></th>
                    </tr>
                  <tr>
                    <td> <a class="dropdown-item" >Web Development (PHP Laravel)</a></td>
                    <td><a class="dropdown-item" >Web Development (Python Django)</a></td>
                  </tr>
                  <tr>
                    <td> <a class="dropdown-item" >Career Counselling</a></td>
                    <td> <a class="dropdown-item" >Digital Marketing</a></td>
                  </tr>
                  <tr>
                    <td> <a class="dropdown-item" >Accounting</a></td>
                    <td><a class="dropdown-item" >Advance Network Engineering</a></td>
                  </tr>
                  <tr>
                    <td>  <a class="dropdown-item" >Advance System Engineering</a></td>
                    <td></td>
                  </tr>
            </table>
            </div>
        </li>
        --}}
        </ul>
      </div>
    </div>
  </nav>
