@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Navbar Name</h3></div>

            <div class="card-body">
                @if(session('message'))
                <div class='alert alert-success'>{{ session('message')}}</div>
                @endif
                @if(session('error'))
                <div class='alert alert-danger'>{{ session('error')}}</div>
                @endif

                    <form action="{{route('navitem.store')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label for="navbar_name">Name</label>
                                                <input class="form-control" name = "navbar_name" id="navbar_name" type="text" placeholder="Name" />
                                            </div><br>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status" required>
                                                    <option>Enabled</option>
                                                    <option>Disabled</option>
                                                </select>
                                            </div> <br>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary"> Add Navbar Name </button>
                                            </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
@endsection


