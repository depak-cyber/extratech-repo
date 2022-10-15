<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlidersController extends Controller
{

    public function index()
    {
   // $sliders = Slider::all();
    $sliders = Slider::where('status', '0')->get(); //when slider is 0 then only it should be visible
    return view('welcome', compact('sliders'));
    }

    public function create()
   {
    $sliders = Slider::all();
    $title="Add Sliders";
    return view('admin.post.createSliders', compact('title','sliders'));
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

        return view('admin.user.sliders', compact('sliders','sliders'));
    }


    public function edit($id)
         {
            # return $id;
            $sliders = Slider::where('id', $id)->get();
            # return $sliders;
            return view('admin.post.updateSliders', ['cd'=>$sliders]);
         }

         public function updateSlidersData(Request $request)
         {
                $id= $request->id;
                $heading = $request->input('heading');
                $subheading = $request->input('subheading');
                $paragraph = $request->input('paragraph');
               // $image = $request->input('image');
                $status = $request->input('status');

                if ($request->hasFile('image')) {

                    $request->validate([
                        'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);

                    $request->file('image')->store('frontend/images');
                    $image =$request->file('image')->getClientOriginalName();
                   }

                // return dd($image); checking that image is coming or not

                $updateSuccess = Slider::where('id', $id)->update([
                    'heading'=>$heading,
                    'subheading'=>$subheading,
                    'image'=>$image,
                    'status'=>$status,
                    ]);

            #when update is successful then it will return given message
            if($updateSuccess)
            return redirect('viewSlider')->with('message', 'Sliders updated successfully');
           //echo "<h3>Sliders updated successfully !!</h3>";
            else
            echo "<h3>Sliders updated failed, please try again!!</h3>";
         }

        public function delete_sliders($id)
        {
            $sliders = Slider::find($id);
            $sliders->delete();
            return redirect('viewSlider')->with('message', 'Sliders deleted successfully');
        }
}
