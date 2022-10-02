@extends('layouts.admin')
<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

   
  @include('layouts.inc.usidebar')

</div>
@section('content')
<div class="card-header"><h3 class="text-center font-weight-light my-4">Posts form</h3></div>
    
      <div class='form-group'>
      <a href='{{url('admin/add-post')}}' class="btn btn-primary float-end">Add posts</a>
      </div>
    
      @if($errors->any())
      <div class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
      </div>
      @endif
       
        
        <div class='card-body'>
            <form action="{{url('admin/add-post')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="">Title</label>
                <input type='text' name='title' class='form-control'/>
              </div> 
              <div class="form-group">
                <label for="">Articles</label>
                <input type='text' name='articles' class='form-control'/>
              </div> 
              
            </div>   
                
              
             

            
           
          <div class="card-footer">
            <button type="submit" class="btn btn-primary"> Save Post </button>
        </div>
</form>
        </div> 
            </form>
          </div>
      </div>
    </div>
  @endsection


         