@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4 mb-3">Update Services</h3></div>
                    <div class="card-body">
                        @if(session('message'))
                        <div class='alert alert-success'>{{ session('message')}}</div>
                        @endif
                        @if(session('error'))
                        <div class='alert alert-danger'>{{ session('error')}}</div>
                        @endif

                    <a href='{{url('viewService')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-eye" aria-hidden="true"></i> View services</a>

                    <form action="updateServices{{$cd[0]->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="icon">Icon</label>
                                                <input class="form-control" name ="icon" id="icon" type="file" placeholder="Icon" /> <br>
                                                <img src="/admin/icons/{{$cd[0]->icon}}" width='50' height= '50'/>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" name = "name" id="name" type="text" placeholder="Name" value="{{$cd[0]->name}}" /> <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input class="form-control" type="text" name="description" id="description" placeholder="Enter Service Description" value="{{$cd[0]->description}}"  /><br>
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


