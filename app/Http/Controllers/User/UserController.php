<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function profile(Request $request){
      $id = $request->input('id');
      $user = User::where('id', $id)->first();
      $ses= Session::put('id', $user->id);
      echo $ses;

      exit;

      return view('users.profile');
      
    

      
    
   }
}


