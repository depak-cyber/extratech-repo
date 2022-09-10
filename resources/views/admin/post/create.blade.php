@extends('layouts.admin')

@section('content')
  <h1>Post</h1>
  <div class="wrapper">
    <div class='card'>
      
      @if($errors->any())
      <div class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
      </div>
      @endif
        <div class='card-header'>
            <h4>View Posts
            <a href='{{url('admin/add-post')}}' class="btn btn-primary float-end">Add posts</a>
        </h4>
        </div>
        <div class='card-body'>
            <form action="{{url('admin/add-post')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="">Title</label>
                <input type='text' name='title' class='form-control'/>
              </div> 
              <div class="mb-3">
                <label for="">Articles</label>
                <input type='text' name='articles' class='form-control'/>
              </div> 
              <div class='row'>
               <div class="col-md-4"> 
              <div class="mb-3">
                <label class="form-check-label" for="">Status</label>
                <input   type="checkbox" name='status' />
                
              </div>
            </div>
            <div class="col-md-8">
            <div class="mb-3">
              <button type='submit' class='btn btn-primary float-end'>Save Post</button>
            </div> 
          </div> 
        </div> 
            </form>
          </div>
      </div>
    </div>
  @endsection


         