<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlidersController extends Controller
{

    public function index()
    {
    # $sliders = Slider::where('status', '1')->get();
    return view('admin.index');
    }

    public function create()
   {
    $title="Add Sliders";
    return view('admin.post.createSliders', compact('title'));
   }

   public function viewSlider()
   {
       $sliders = Slider::all();
       $sliders = Slider::paginate(6);
       return view('admin.user.sliders',compact('sliders', 'sliders'));
   }

   public function store(Request $request)
   {
        $validate= $request->validate([
            'heading'=>['string'],
            'subheading'=>['string'],
            'paragraph'=>['string'],
            'status'=>['string'],
        ]);

        $sliders= new Slider;
        $sliders->heading=$validate['heading'];
        $sliders->subheading=$validate['subheading'];
        $sliders->paragraph=$validate['paragraph'];
        $sliders->status=$request->status == true ? '1':'0';

        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->file('image')->store('frontend/images');
            $sliders->image =$request->file('image')->getClientOriginalName();
        }

        $sliders->save();

        $sliders = Slider::all();

        return view('admin.user.sliders', compact('sliders'));
    }


    public function edit($id)
    {
        return view('admin.post.editSliders', compact('id'));

    }


    public function update(Request $request ,Slider $slider)
        {
            $validate= $request->validate([
                'heading'=>['string'],
                'subheading'=>['string'],
                'paragraph'=>['string'],
                'status'=>['string'],
            ]);

            $sliders= new Slider;
            $sliders->heading=$validate['heading'];
            $sliders->subheading=$validate['subheading'];
            $sliders->paragraph=$validate['paragraph'];
            $sliders->status=$request->status == true ? '1':'0';

            if ($request->hasFile('image')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);


                $destination = $slider->image;
                if (File::exists($destination))
                {
                    File::delete($destination);
                }

                $request->file('image')->store('frontend/images');
                $sliders->image =$request->file('image')->getClientOriginalName();
            }

            $sliders->update();

            return view('admin.user.sliders')->with('message', 'Sliders updated successfully');
        }

    public function delete_sliders($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect('view')->with('message', 'Sliders deleted successfully');
    }
}
