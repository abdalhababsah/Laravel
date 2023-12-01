<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Booking;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('renter', 'House')->paginate(5);

        return view('admin.booking.index', ['bookings' => $bookings]);
    }
    public function searchRenter(Request $request)
{
    $searchTerm = $request->input('search');
    $bookings = Booking::with('renter')->whereHas('renter', function ($query) use ($searchTerm) {
        $query->where('Name', 'like', '%' . $searchTerm . '%');
    })->paginate(5);

    return view('admin.booking.index', ['bookings' => $bookings]);
}

}
