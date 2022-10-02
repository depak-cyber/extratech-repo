<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function profile(){
      
      

      return view('users.profile');
      
    

      
    
   }
   public function index(){
      $data= image::all();
      return view('admin.index', compact('data'));

   }

   public function add_image(Request $request){
      $product=new image;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('uploads',$imagename);
      $product->image=$imagename;
      $product->save();
      return redirect()->back()->with('message','Succesfully product added');
      
    }


   


}


