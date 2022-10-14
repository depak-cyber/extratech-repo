@extends('layouts.admin')
@section('content')
            <div class="card-header"><h3 class="text-center font-weight-light my-4">SubNavbar Name</h3></div>

               <div class="card-body">
                @if(session('message'))
                <div class='alert alert-success'>{{ session('message')}}</div>
                @endif
                @if(session('error'))
                <div class='alert alert-danger'>{{ session('error')}}</div>
                @endif

                    <form action="{{route('subnavitem.store')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label for="subnavbar_name">Dropdown Name</label>
                                                <input class="form-control" name = "subnavbar_name" type="text" placeholder="DropdownName" />
                                            </div><br>

                                            <div class="form-group">
                                                <label for="navbar_name">Select Main Navigation Item</label>
                                                <select class="form-control" name="nav_item_id" required>
                                                    @foreach ($navItems as $item )
                                                    <option value="{{$item->id}}"> {{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><br>

                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option value="enabled" >Enabled</option>
                                                    <option value="disabled" >Disabled</option>
                                                </select>
                                            </div> <br>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary"> Add Dropdown Name </button>
                                            </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
@endsection


