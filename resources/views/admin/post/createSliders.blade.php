@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4 mb-3">Add Sliders</h3></div>
            <div class="card-body">

                @if($errors->any())
                <div class='alert alert-danger'>
                  @foreach ($errors->all() as $error)
                      <div>{{$error}}</div>
                  @endforeach
                </div>
                @endif

                    <a href='{{url('viewSlider')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-eye" aria-hidden="true"></i> View Sliders</a>

                    <form action="{{url('sliders/store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input class="form-control" name ="image" id="image" type="file" placeholder="Image"  /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">Heading</label>
                                                <input class="form-control" name = "heading" id="heading" type="text" placeholder="Heading"  /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="subheading">Sub-Heading</label>
                                                <input class="form-control" name = "subheading" id="subheading" type="text" placeholder="Sub-Heading" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="paragraph">Paragraph</label>
                                                <input class="form-control" type="text" name="paragraph" id="paragraph" placeholder="Paragraph" ><br>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="checkbox" name="status" id="status" style="width:30px;height:30px;display:block;" ><br>
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


