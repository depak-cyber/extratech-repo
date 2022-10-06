<div class="sidebar-wrapper">
    <div class="logo">

        <a href="#">
            <img class="avatar border-gray" src="{{asset('uploads/user.png')}}" alt="">
            <h5 class="title">{{Auth::user()->name}}</h5>
        </a>
    </div>

    <ul class="nav">

        <li class="nav-item active">


            <a class="nav-link" href="{{url('users/profile')}}">Profile</a>


            <a class="nav-link" href="{{url('admin/users')}}">All users </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{url('admin/add-post')}}">Add Post</a>
            <a class="nav-link" href="{{url('admin/posts')}}">All posts</a>

        </li>
    </ul>

</div>
