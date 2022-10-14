<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{

    public function create()
    {
     $testimonal = Testimonal::all();
     $message = "Testimonals created successfully!!";
     return view('admin.post.createTestimonals', compact('testimonal','message'));
    }

    public function store(Request $request)
    {
        $validate= $request->validate([
            'title'=>['required','string'],
            'description'=>['required','string'],
            'status'=>['string'],
          ]);

           $testimonal= new Testimonal;
           $testimonal->title=$validate['title'];
           $testimonal->description=$validate['description'];
           //$testimonal->image=$validate['image'];
           $testimonal->status=$request->status == true ? '1':'0';

          if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->file('image')->store('admin/images');
            $testimonal->image =$request->file('image')->getClientOriginalName();
           }

           $testimonal->save();

           $testimonal = Testimonal::all();

          // return redirect('testimonals/store')->with('message', 'Testimonals added successfully');
         return view('admin.user.testimonals', compact('testimonal'));
        }

        public function view()
         {
          $testimonal = Testimonal::all();
          $testimonal = Testimonal::paginate(6);
          return view('admin.user.testimonals', compact('testimonal'));
         }

         public function index()
         {
          $testimonal = Testimonal::all();
          return view('admin.index', compact('testimonal'));
         }

         public function edit($id)
         {
            # return $id;
            $testimonal = Testimonal::where('id', $id)->get();
            # return $testimonal;
            return view('admin.post.updateTestimonal', ['cd'=>$testimonal]);
         }

         public function updateData(Request $request)
         {
                $id= $request->id;
                $title = $request->input('title');
                $description = $request->input('description');
               // $image = $request->input('image');
                $status = $request->input('status');

                if ($request->hasFile('image')) {

                    $request->validate([
                        'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);

                    $request->file('image')->store('admin/images');
                    $image =$request->file('image')->getClientOriginalName();
                   }

                // return dd($image); checking that image is coming or not

                $updateSuccess = Testimonal::where('id', $id)->update([
                    'title'=>$title,
                    'description'=>$description,
                    'image'=>$image,
                    'status'=>$status,
                    ]);

            #when update is successful then it will return given message
            if($updateSuccess)
            return redirect('view')->with('message', 'Testimonal updated successfully');
           //echo "<h3>Testimnoals updated successfully !!</h3>";
            else
            echo "<h3>Testimnoals updated failed, please try again!!</h3>";
         }


         public function destroy($id)
          {
            $testimonal = Testimonal::find($id);
            $testimonal->delete();
            return redirect('view')->with('message', 'Testimonal deleted successfully');
         }
}
