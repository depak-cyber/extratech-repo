
 @extends('layouts.admin')
@section('content')
         <div class="card-header"><h3 class="text-center font-weight-light my-4">Testimonals</h3></div>
            <div class="card-body">

                @if($errors->any())
                    <div class='alert alert-danger'>
                      @foreach ($errors->all() as $error)
                          <div>{{$error}}</div>
                      @endforeach
                    </div>
                @endif
                <a href='{{url('testimonals/create')}}' class="btn btn-primary float-right mb-3">Add testimonals</a>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
            </div>
        </div>
@endsection


