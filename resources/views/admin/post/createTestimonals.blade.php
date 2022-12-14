@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4 mb-3">Create Testimonals</h3></div>
                    <div class="card-body">
                        @if(session('message'))
                        <div class='alert alert-success'>{{ session('message')}}</div>
                        @endif
                        @if(session('error'))
                        <div class='alert alert-danger'>{{ session('error')}}</div>
                        @endif

                    <a href='{{url('view')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-eye" aria-hidden="true"></i> View testimonals</a>

                    <form action="{{url('testimonals/store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input class="form-control" name = "title" id="title" type="text" placeholder="Title"  /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input class="form-control" type="text" name="description" id="description" placeholder="Enter Testimonal Description"/><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input class="form-control" name = "image" id="image" type="file" placeholder="Image"  /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="checkbox" name="status" id="status" style="width:30px;height:30px;display:block;" /><br>
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


