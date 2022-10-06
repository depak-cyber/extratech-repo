@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4 mb-3">Create Services</h3></div>
                <div class="card-body">

                    @if($errors->any())
                    <div class='alert alert-danger'>
                      @foreach ($errors->all() as $error)
                          <div>{{$error}}</div>
                      @endforeach
                    </div>
                    @endif
                    <a href='{{url('view')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-eye" aria-hidden="true"></i> View services</a>

                    <form action="{{url('services/store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="icon">Icon</label>
                                                <input class="form-control" name = "icon" id="icon" type="file" placeholder="Icon" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" name = "name" id="name" type="text" placeholder="Name" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" rows="3"> </textarea> <br>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit"> Save </button>
                                            </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
@endsection


