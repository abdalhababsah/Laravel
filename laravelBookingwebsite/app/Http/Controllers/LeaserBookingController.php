<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\House;
use App\Models\User;
use Faker\Core\File as FakerFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LeaserBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $userId = session('iduser');

        $bookings = Booking::select(
            'houses.HouseID',
            'houses.Address',
            'bookings.BookingID',
            'bookings.BookingStatus',
            'bookings.ArravingTime',
            'bookings.LeavingTime',
            'bookings.RenterID'
        )
            ->join('houses', 'houses.HouseID', '=', 'bookings.HouseID')
            ->join('users', 'users.id', '=', 'houses.UserID')
            ->where('users.id', $userId)
            ->get();
        return view('leaser.booking.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('leaser.booking.edit', ['booking' => $booking]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'BookingStatus' => 'required',
            'ArravingTime' => 'required|date',
            'LeavingTime' => 'required|date',
            'RenterID' => 'required',
            // Add other validation rules as needed
        ]);


        // Update the booking properties
        $booking->update($request->all());
        // Optionally, you can redirect the user to a specific page after the update
        return redirect()->route('leaserbooking.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $Booking)
    {
        $Booking->delete();
        return redirect(route('leaserbooking.index'));
    }
}
