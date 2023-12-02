<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function home()
    {
        $reviews = Review::with(['user:id,name', 'house:HouseID,Location'])->get();
        // dd($reviews);
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
    ////////////////////////////////////



    public function redirectToRole()
    {
        // Check if the role is stored in the session
        if (session()->has('role')) {
            $roleId = session('role');

            // Redirect based on the stored role ID
            switch ($roleId) {
                case 1:
                    return redirect()->route('adminhouse.show');
                    break;
                case 2:
                    return redirect()->route('house.index');
                    break;
                case 3:
                    return redirect()->route('user.reviews');
                    break;
                    // Add more cases for additional roles if needed

                default:
                    // Redirect to a default route for unknown roles
                    return redirect()->route('home');
            }
        } else {
            // Redirect to a default route if the role is not found in the session
            return redirect()->route('home');
        }
    }
}
