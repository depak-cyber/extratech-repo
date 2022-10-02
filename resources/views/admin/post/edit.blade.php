@extends('layouts.admin')
<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

   
  @include('layouts.inc.usidebar')

</div>
@section('content')
  <h1>Post</h1>
  <div class="wrapper">
    <div class='card'>


        <div class='card-header'>
            <h4>Edit Posts <a href='{{url('admin/posts')}}'  class="btn btn-primary float-end">Back</a> </h4>
        </div>
        <div class='card-body'>

            @if($errors->any())
            <div class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/update-post/'.$post->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="">Title</label>
                <input type='text' name='title' value='{{$post->title}}' class='form-control'/>
              </div>
              <div class="mb-3">
                <label for="">Articles</label>
                <input type='text' name='articles'  value='{{$post->articles}}' class='form-control'/>
              </div>
              <div class='row'>
               <div class="col-md-4">
              <div class="mb-3">
                <label for="">Status</label>
                <input type='checkbox' name='status' {{$post->status =='1'?'checked':''}}/>
              </div>
            </div>
            <div class="col-md-8">
            <div class="mb-3">
              <button type='submit' class='btn btn-primary float-end'>Save</button>
            </div>
          </div>
        </div>
            </form>
          </div>
      </div>
    </div>
  @endsection


