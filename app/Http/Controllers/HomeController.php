<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Testimonal;
use Illuminate\Http\Request;

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
        return view('welcome',compact('services','testimonal'));
     }



}
