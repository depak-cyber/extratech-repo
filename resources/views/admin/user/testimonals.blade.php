
 @extends('layouts.admin')
@section('content')
         <div class="card-header">
            <h3 class="text-center font-weight-light my-4">View Testimonals</h3></div>
            <div class="card-body">

                @if($errors->any())
                    <div class='alert alert-danger'>
                      @foreach ($errors->all() as $error)
                          <div>{{$error}}</div>
                      @endforeach
                    </div>
                @endif
                <a href='{{url('testimonals/create')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i> Add testimonals</a>
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
                        @foreach($testimonal as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->title}}</td>
                          <td>{{$item->description}}</td>
                          <td>
                            {{--if the image is coming then we are going to show image otherwise we are not going to show the images--}}
                            @if (!empty($item['image']))
                            <img src="{{asset ('admin/images/'. $item['image']) }}" width='50' height= '50' class="img img-responsive">
                            @endif
                          </td>
                          <td>{{$item->status == '1' ? 'Visible':'Hidden'}}</td>
                          <td>
                            <a href ="{{url('update-testimonals'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</a>
                            <a href ="{{url('delete-testimonals'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-trash" aria-hidden="true"></i>  Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        <span style="padding-top:50px;" >
                            {!!$testimonal->withQueryString()->links('pagination::bootstrap-5') !!}
                         </span>
                    </tbody>
                  </table>
            </div>
        </div>
@endsection


