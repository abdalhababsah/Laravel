<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;

class HomeHousesViewController extends Controller
{
    public function index($HouseID)
    {
        $house = House::find($HouseID);

        if (!$house) {
            abort(404, 'House not found');
        }

        return view('room-detiels', ['house' => $house]);
    }

    public function book(Request $request, $HouseID)
{
    $arrivingTime = $request->input('arriving_time');
    $leavingTime = $request->input('leaving_time');
    $userID = Session::get('iduser');

    $existingBooking = Booking::where('HouseID', $HouseID)
        ->where(function ($query) use ($arrivingTime, $leavingTime) {
            $query->where(function ($q) use ($arrivingTime, $leavingTime) {
                $q->where('ArravingTime', '<', $leavingTime)
                    ->where('LeavingTime', '>', $arrivingTime);
            })->orWhere(function ($q) use ($arrivingTime, $leavingTime) {
                $q->where('ArravingTime', '>=', $arrivingTime)
                    ->where('ArravingTime', '<', $leavingTime);
            })->orWhere(function ($q) use ($arrivingTime, $leavingTime) {
                $q->where('LeavingTime', '>', $arrivingTime)
                    ->where('LeavingTime', '<=', $leavingTime);
            });
        })
        ->exists();

    if ($existingBooking) {
        // Handle case when the selected time range is already booked
        return redirect()->back()->with('error', 'This time range is already booked.');
    }

    $booking = new Booking();
    $booking->BookingStatus = 2;
    $booking->ArravingTime = $arrivingTime;
    $booking->LeavingTime = $leavingTime;
    $booking->RenterID = $userID;
    $booking->HouseID = $HouseID;
    $booking->save();

    return redirect()->back()->with('success', 'Booking successful!');
}
}
