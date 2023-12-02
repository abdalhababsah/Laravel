<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class PageController extends Controller
{
    //
    public function home()
    {
        $reviews = Review::with(['user', 'house'])->get();

        return view('home', compact('reviews'));
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
