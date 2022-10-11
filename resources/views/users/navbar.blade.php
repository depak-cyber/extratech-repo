
       <!-- header section starts -->
       <header class="header_section">
        <div class="container">
           <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="#"><img height="100"  width="100" src="/frontend/home/images/logo.png" alt="png" /></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav">

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
                    </ul>

                     @guest

                     <li class="nav-item">
                        <a class="btn btn-primary" id="logincss" href="{{url('login')}}">Login</a>
                     </li>

                     <li class="nav-item">
                        <a class="btn  btn-success"  href="{{url('register')}}">Register Here</a>
                     </li>

                     @else

                     <li class="nav-item">
                        <a class="btn  btn-outline-secondary nav-link" href="{{ url ('logout') }}">Logout</a>
                     </li>

                     @endguest

                 </ul>
              </div>
           </nav>
        </div>
     </header>
     <!-- end header section -->
