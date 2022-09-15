<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    public function index()
    {
     return view('admin.user.testimonals');
    }

    public function create()
    {
     return view('admin.post.createTestimonals');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required','string', 'max:255',
            'description'=>'required','string', 'max:800',
             'image'=>'nullable','image', 'mimes:jpg,jpeg,png', // Only allow .jpg, .bmp and .png file types.
            'status'=>'nullable',
          ]);

         /*  if ($request->hasFile('image'))
           {

            $file = $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/testimonals/', $filename);
            $data['image']= "public/testimonals/".$filename;
           } */

           if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $request->file('image')->store('public/testimonals');
            $data['image'] =$request->file('image')->getClientOriginalName();

        }

          $data = $request->all();

          $data['status'] = $request->status == true ? '1':'0'; //when it is true, checked (1) else not checked(0).

        //inserting data into user table
        Testimonal::create([
            'title' => $data['title'],
            'description' =>$data['description'],
            'image' => $data['image'],
            'status' => $data['status'],
        ]);

        return view('admin.user.testimonals')->with('success', 'Testimonals added successfully!!');
    }


}
