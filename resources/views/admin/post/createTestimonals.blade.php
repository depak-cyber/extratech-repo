@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Testimonals</h3></div>
                <div class="card-body">

                    @if($errors->any())
                    <div class='alert alert-danger'>
                      @foreach ($errors->all() as $error)
                          <div>{{$error}}</div>
                      @endforeach
                    </div>
                    @endif

                    <form action="{{url('testimonals/store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input class="form-control" name = "title" id="title" type="text" placeholder="Title" />
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" rows="3"> </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input class="form-control" name = "image" id="image" type="file" placeholder="Image" />
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="checkbox" name="status" id="status" style="width:30px;height:30px;display:block;">
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


