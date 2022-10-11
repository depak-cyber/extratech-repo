<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
     $services = Services::all();
     return view('admin.index', compact('Services'));
    }

    public function create()
    {
     return view('admin.post.createService');
    }

    public function store(Request $request)
    {
        $validate= $request->validate([
            'name'=>['required','string'],
            'description'=>['required','string'],
          ]);

           $services= new Services;
           $services->name=$validate['name'];
           $services->description=$validate['description'];
           //$services->icon=$validate['icon'];


          if ($request->hasFile('icon')) {

            $request->validate([
                'icon' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->file('icon')->store('admin/icons');
            $services->icon =$request->file('icon')->getClientOriginalName();
           }

           $services->save();

           $services = Services::all();

         return view('admin.user.services', compact('services'));
        }

        public function viewService()
         {
          $services = Services::all();
          $services = Services::paginate(3);
          return view('admin.user.services', compact('services'));
         }


         public function edit($id)
         {
            $services = Services::find($id);
            return view('admin.post.createService',compact('services'));
         }

         public function destroy($id)
          {
            $services = Services::find($id);
            $services->delete();
            return redirect('view')->with('message', 'Services deleted successfully');
         }


}
