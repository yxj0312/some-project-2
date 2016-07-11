<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Flyer;
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
        // $this->middleware('auth',['except' => ['index']]);
        $this->middleware('auth',['except'=>['welcome']]);
        // $this->middleware('admin',['except'=>['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Flyer $flyers)
    {

        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

   
}
