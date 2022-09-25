<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{

    public function create()
    {

     return view('admin.post.createTestimonals');
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
          return view('admin.user.testimonals', compact('testimonal'));
         }


         public function edit($id)
         {
            $testimonal = Testimonal::find($id);
            return view('admin.post.createTestimonals',compact('testimonal'));
         }

         public function destroy($id)
          {
            $testimonal = Testimonal::find($id);
            $testimonal->delete();
            return redirect('view')->with('message', 'Testimonal deleted successfully');
         }
}
