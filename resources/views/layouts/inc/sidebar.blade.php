<div class="sidebar-wrapper">
    <div class="logo">

        <a href="#">
            <img class="avatar border-gray" src="{{asset('uploads/user.png')}}" alt="">
            <h5 class="title">{{Auth::user()->name}}</h5>
        </a>
    </div>

    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('users/profile')}}">Profile </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('admin/users')}}">Users </a>
        </li>
        <li class="nav-item active">

            <a class="nav-link" href="{{url('admin/add-post')}}">Add Post</a>
        </li>
        <li class="nav-item active">

             <a class="nav-link"href="{{url('admin/posts')}}">View Post</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/navitem/create')}}">Add Navbar</a>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="{{url('/subnavitem/create')}}">Add SubNavbar</a>
       </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('testimonals/create')}}">Add Testimonals</a>
        </li>
        <li class="nav-item active">

            <a class="nav-link" href="{{url('services/create')}}">Add Services</a>
        </li>
        <li class="nav-item active">

             <a class="nav-link"href="{{url('viewService')}}">View Services</a>
        </li>
    </ul>
</div>
