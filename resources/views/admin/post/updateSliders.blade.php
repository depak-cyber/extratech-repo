@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4 mb-3">Edit Sliders</h3></div>

                <div class="card-body">
                @if(session('message'))
                <div class='alert alert-success'>{{ session('message')}}</div>
                @endif
                @if(session('error'))
                <div class='alert alert-danger'>{{ session('error')}}</div>
                @endif

                    <a href='{{url('viewSlider')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-eye" aria-hidden="true"></i> View Sliders</a>

                    <form action="updateSliders{{$cd[0]->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input class="form-control" name ="image" id="image" type="file" placeholder="Image" /> <br>
                                                <img src="/frontend/images/{{$cd[0]->image}}" width='50' height= '50'/>
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">Heading</label>
                                                <input class="form-control" name = "heading" id="heading" type="text" placeholder="Heading" value="{{$cd[0]->heading}}" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="subheading">Sub-Heading</label>
                                                <input class="form-control" name = "subheading" id="subheading" type="text" placeholder="Sub-Heading" value="{{$cd[0]->subheading}}" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="paragraph">Paragraph</label>
                                                <input class="form-control" type="text" name="paragraph" id="paragraph" placeholder="Paragraph" value="{{$cd[0]->paragraph}}" /><br>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit"> Update </button>
                                            </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
@endsection


