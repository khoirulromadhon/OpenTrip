<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        Auth::check();
        return view('index');
    }

    public function about()
    {
        Auth::check();
        return view('about');
    }

    public function blog()
    {
        Auth::check();
        return view('blog');
    }

    public function contact()
    {
        Auth::check();
        return view('contact');
    }
}
