@extends('layouts.admin')

@section('content')
  <h1>Post</h1>
  <div class="wrapper">
    <div class='card'>
        <div class='card-header'>
            <h4>View Posts
            <a href='{{url('admin/add-post')}}' class="btn btn-primary float-end">Add posts</a>
        </h4>
        </div>
        <div class='card-body'>
          @if(session('message'))
          <div class='alert alert-success'>{{ session('message')}}</div>
          @endif
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Article</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->articles}}</td>
                  <td>{{$item->status == '1' ? 'Hidden': 'Visible'}}</td>
                  <td>
                    <a href="{{url('admin/post/' .$item->id)}}" class='btn btn-success'>Edit</a>
                  </td>
                  <td>
                    <a href="{{url('admin/delete-post/' .$item->id)}}" class='btn btn-danger'>Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>  
        </div>
    </div>
  </div>
@endsection