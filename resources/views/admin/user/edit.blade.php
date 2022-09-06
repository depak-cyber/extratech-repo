@extends('layouts.admin')

@section('content')
  
  <div class="wrapper">
    <div class='card'>
        <div class='card-header'>
            <h4>Edit Users
                <a href="{{url('admin/users')}}" class='btn btn-danger float-end'>Back</a>
            </h4>
        </div>
        <div class='card-body'>
            <form action=''>
                <div class='mb-3'>
                   <label>Full Name</label>
                   <p class='form-control'>{{$user->name}}</p>
                </div>
                <div class='mb-3'>
                    <label>Email Id</label>
                    <p class='form-control'>{{$user->email}}</p>
                 </div> 
                 <div class='mb-3'>
                    <label>Created at</label>
                    <p class='form-control'>{{$user->created_at->format('d/m/y')}}</p>
                 </div> 

            </form>   
        </div>


    </div>
</div>
@endsection