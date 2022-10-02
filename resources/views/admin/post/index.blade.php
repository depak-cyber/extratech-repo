@extends('layouts.admin')
<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

   
  @include('layouts.inc.usidebar')

</div>

@section('content')



  <div class='row'>
      <div class="card-header"><h3 class="text-center font-weight-light my-4">All posts</h3></div>
        
        <div class="card-body">
          @if(session('message'))
          <div class='alert alert-success'>{{ session('message')}}</div>
          @endif
          @if(session('error'))
          <div class='alert alert-danger'>{{ session('error')}}</div>
          @endif
          <table id='example'class="table table-striped" style="width:100%">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Article</th>
                  
                  <th>Status</th>
                  <th>Approved</th>
                  <th>Pending</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              
              </thead>
              <tbody>
                @if(count($posts)>0)
                @foreach($posts as $item)
                <tr> 
                  <td>{{$item->id}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->articles}} <br><u>Created {{$item->created_at}}</u> <strong>Written by: {{$item->user->name}}</strong> </td>
                  
                  <td>{{$item->status}}</td>
                  <td>
                    <a class='btn btn-success' href="{{url('admin/approved/' .$item->id)}}">Approved</a>
                  </td>
                  <td><a class='btn btn-danger' href="{{url('admin/pending/' .$item->id)}}">Pending</a>

                  </td>
                  @if(!Auth::guest())
                  
                  <td>
                    
                    <a href="{{url('admin/post/' .$item->id)}}" class='btn btn-success'>Edit</a>
                  </td>
                  <td>
                    <a href="{{url('admin/delete-post/' .$item->id)}}" class='btn btn-danger'>Delete</a>
                  </td>
                  
                  @endif
                </tr>
                @endforeach
                
                
                @else
                <p>No posts found</p>
                @endif
                <tbody>
            </table> 
            
            <div class='your paginate'>{{$posts->links()}}</div>
           

           
        </div>
        
       
        
        <div class="card-footer">
          <a href='{{url('admin/add-post')}}' class="btn btn-primary float-end">Add posts</a> 
      </div>
    </div>
@endsection
@section('script')
<script>
  
  $(document).ready(function () {
      $('#example').DataTable();
  });
    </script>
    @endsection



