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
      <div>
        @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="mr-5 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
    @endif
      </div>
        <div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>

      </div>
    </div>
  </nav>
