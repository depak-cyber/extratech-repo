<div class="sidebar-wrapper">
    <div class="logo">
        <a href="javascript:;" class="simple-text">
          Your Logo
        </a>
    </div>

    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('users/profile')}}">Profile </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{url('admin/users')}}">Users </a>
        </li>

        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Posts</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                   <li> <a class="dropdown-item" href="{{url('admin/add-post')}}">Add Post</a></li>
                   <li> <a class="dropdown-item" href="{{url('admin/posts')}}">View Post</a> </li>
                </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Navbars</a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
               <li>  <a class="nav-link" href="{{url('/navitem/create')}}">Add Navbar</a></li>
               <li> <a class="nav-link" href="{{url('/subnavitem/create')}}">Add SubNavbar</a></li>
            </ul>
        </li>

        <li>
            <a class="nav-link" href="{{url('testimonals/create')}}">Add Testimonals</a>
        </li>
    </ul>
</div>
