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
<<<<<<< HEAD
       
        </li>
=======

>>>>>>> 23f1cc3bffc68c03a325bb09bc929727c91fa871
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


<<<<<<< HEAD
       

       
        
        <li class="nav-item active">
=======
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Navbars</a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
               <li>  <a class="nav-link" href="{{url('/navitem/create')}}">Add Navbar</a></li>
               <li> <a class="nav-link" href="{{url('/subnavitem/create')}}">Add SubNavbar</a></li>
            </ul>
        </li>

        <li>
>>>>>>> 23f1cc3bffc68c03a325bb09bc929727c91fa871
            <a class="nav-link" href="{{url('testimonals/create')}}">Add Testimonals</a>
        </li>
    </ul>
</div>
