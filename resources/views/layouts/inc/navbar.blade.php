<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href='{{url('admin/dashboard')}}' >EXTRATECH</a>
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
        </ul>
      </div>
    </div>
  </nav>
