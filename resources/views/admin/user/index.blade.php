@extends('layouts.admin')

@section('content')
  <h1>Post</h1>
  <div class="wrapper">
    <div class='card'>
        <div class='card-header'>
            <h4>View Users</h4>
        </div>
        <div class='card-body'>
          @if(session('message'))
          <div class='alert alert-success'>{{ session('message')}}</div>
          @endif
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Edit</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($users as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->role_as == '1' ? 'Admin':'User'}}</td>
                  <td>
                    <a href="{{url('admin/users/' .$item->id)}}" class='btn btn-success'>Edit</a>
                  </td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>  
            <div class='your paginate'>{{$users->links()}}</div>
        </div>
    </div>
  </div>
@endsection