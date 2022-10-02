<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller


{

    public function __construct()
{
    $this->middleware('auth');
}

    public function index(){
       
    $users = User::all();
    $users=User::paginate(3);
    return view('admin.user.index', compact('users', 'users'));
    }
    
    public function edit($id){
       
        $user = User::find($id);
        if(auth()->user()->role_as == '1'){
            return view('admin.user.edit', compact('user'));
        }
        if(auth()->user()->id!==$user->id){
            return redirect('admin/posts')->with('error', 'Unauthorized page');
        }
       
        
        return view('admin.user.edit', compact('user'));
        }
        

}
