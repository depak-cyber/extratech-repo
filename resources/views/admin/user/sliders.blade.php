
 @extends('layouts.admin')
 @section('content')
          <div class="card-header">
             <h3 class="text-center font-weight-light my-4">View Sliders</h3></div>
             <div class="card-body">

                @if(session('message'))
                <div class='alert alert-success'>{{ session('message')}}</div>
                @endif

                 <a href='{{url('sliders/create')}}' class="btn btn-primary float-right mb-3"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i> Add Sliders</a>
                 <table id="slidertbl" class="table table-bordered">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Image</th>
                         <th>Heading</th>
                         <th>Subheading</th>
                         <th>Paragraph</th>
                         <th>Status</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                         @foreach($sliders as $item)
                         <tr>
                           <td>{{$item->id}}</td>
                           <td>
                            {{--if the icons are coming then we are going to show icon otherwise we are not going to show the icons--}}
                            @if (!empty($item['image']))
                            <img src="{{asset ('frontend/images/'. $item['image']) }}" width='50' height= '50' class="img img-responsive">
                            @endif
                          </td>
                           <td>{{$item->heading}}</td>
                           <td>{{$item->subheading}}</td>
                           <td>{{$item->paragraph}}</td>
                           <td>{{$item->status == '1' ? 'Enable':'Disable'}}</td>
                           <td>
                             <a href ="{{url('update-sliders/'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</a>
                             <a href ="{{url('delete-sliders/'.$item ['id']) }}" class="btn btn-success"><i class= "fa fa-trash" aria-hidden="true"></i>  Delete</a>
                           </td>
                         </tr>
                         @endforeach
                     </tbody>
                   </table>
             </div>
         </div>
 @endsection
 @section('script')
<script>

  $(document).ready(function () {
      $('#slidertbl').DataTable();
  });
    </script>
    @endsection


