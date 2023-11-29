<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
