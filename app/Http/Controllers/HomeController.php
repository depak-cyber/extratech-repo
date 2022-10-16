<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Services;
use App\Models\Testimonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     public function index()
     {
        $services = Services::all();
        $testimonal = Testimonal::all();
        $sliders = Slider::all();
        return view('welcome',compact('services','testimonal','sliders'));
     }

     public function logout()
     {
         Session::flush();
         Auth::logout();
         return redirect('login');
     }

}
