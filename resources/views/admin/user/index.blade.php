@extends('layouts.admin')
<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

   
  @include('layouts.inc.usidebar')

</div>

@section('content')
<div class="card-header"><h3 class="text-center font-weight-light my-4">All users</h3></div>
       
        <div class='card-body'>
          @if(session('message'))
          <div class='alert alert-success'>{{ session('message')}}</div>
          @endif
            
            <table id='example'class="table table-striped" style="width:100%">
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
                    @if(!Auth::guest())
                    
                    
                    <a href="{{url('admin/users/' .$item->id)}}" class='btn btn-success'>Edit</a>
                    
                 
                  @endif
                  </td>
                  
                  
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                
            </tfoot>
              
            </table>  
            <div class='your paginate'>{{$users->links()}}</div>
        </div>
    
@endsection
@section('script')
<script>
  
  $(document).ready(function () {
      $('#example').DataTable();
  });
    </script>
    @endsection

