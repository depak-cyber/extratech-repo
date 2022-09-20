<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       
    $users = User::all();
    $users=User::paginate(2);
    return view('admin.user.index', compact('users', 'users'));
    }
    
    public function edit($id){
       
        $user = User::find($id);
        
        return view('admin.user.edit', compact('user'));
        }
        

}