
 @extends('layouts.admin')
 @section('content')
          <div class="card-header">
             <h3 class="text-center font-weight-light my-4">View Services</h3></div>
             <div class="card-body">

                 @if($errors->any())
                     <div class='alert alert-danger'>
                       @foreach ($errors->all() as $error)
                           <div>{{$error}}</div>
                       @endforeach
                     </div>
                 @endif
                 <a href='{{url('services/create')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i> Add Services</a>
                 <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Icon</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                         @foreach($services as $item)
                         <tr>
                           <td>{{$item->id}}</td>
                           <td>
                            {{--if the icons are coming then we are going to show icon otherwise we are not going to show the icons--}}
                            @if (!empty($item['icon']))
                            <img src="{{asset ('admin/icons/'. $item['icon']) }}" width='50' height= '50' class="img img-responsive">
                            @endif
                          </td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->description}}</td>
                           <td>
                             <a href ="{{url('update-services/'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</a>
                             <a href ="{{url('delete-services/'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-trash" aria-hidden="true"></i>  Delete</a>
                           </td>
                         </tr>
                         @endforeach
                         <span style="padding-top:50px;" >
                             {!!$services->withQueryString()->links('pagination::bootstrap-5') !!}
                          </span>
                     </tbody>
                   </table>
             </div>
         </div>
 @endsection


