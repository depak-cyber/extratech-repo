<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
     $services = Services::all();
     return view('admin.index', compact('services'));
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

         return view('admin.user.services', compact('services','services'));
        }


        public function viewService()
         {
          $services = Services::all();
          $services = Services::paginate(6);
          return view('admin.user.services', compact('services','services'));
         }


         public function edit($id)
         {
            # return $id;
            $services = Services::where('id', $id)->get();
            # return $services;
            return view('admin.post.updateServices', ['cd'=>$services]);
         }

         public function updateServicesData(Request $request)
         {
                $id= $request->id;
                $icon = $request->input('icon');
                $name = $request->input('name');
                $description = $request->input('description');

                if ($request->hasFile('icon')) {

                    $request->validate([
                        'icon' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);

                    $request->file('icon')->store('admin/icons');
                    $icon =$request->file('icon')->getClientOriginalName();
                   }

                // return dd($icon); checking that icon is coming or not

                $updateSuccess = Services::where('id', $id)->update([
                    'icon'=>$icon,
                    'name'=>$name,
                    'description'=>$description,
                    ]);

            #when update is successful then it will return given message
            if($updateSuccess)
            return redirect('viewService')->with('message', 'Services updated successfully');
           //echo "<h3>Services updated successfully !!</h3>";
            else
            echo "<h3>Services updated failed, please try again!!</h3>";
         }


         public function destroy($id)
          {
            $services = Services::find($id);
            $services->delete();
            return redirect('viewService')->with('message', 'Services deleted successfully');
         }


}
