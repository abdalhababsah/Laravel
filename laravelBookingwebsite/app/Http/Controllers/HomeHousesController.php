<?php
namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Booking;

class HomeHousesController extends Controller
{
    public function index()
    {
        // Fetch all houses
        $houses = House::all();
        // Pass houses data to the view
        // return view('houses.index', compact('houses'));
        return view('rooms', ['houses' => $houses]);

    }


    public function filter(Request $request)
    {
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        $numberOfRoom = $request->input('NumberOfRoom');
        $numberOfToilet = $request->input('NumberOfToilet');
        $numberOfBalcony = $request->input('NumberOfBelcony');

        $houses = House::where('NumberOfRoom', $numberOfRoom)
            ->where('NumberOfToilet', $numberOfToilet)
            ->where('NumberOfBelcony', $numberOfBalcony)
            ->whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->where('ArravingTime', '<=', Carbon::parse($checkIn))
                        ->where('LeavingTime', '>=', Carbon::parse($checkOut));
                })->orWhere(function ($q) use ($checkIn, $checkOut) {
                    $q->where('ArravingTime', '>=', Carbon::parse($checkIn))
                        ->where('ArravingTime', '<=', Carbon::parse($checkOut));
                })->orWhere(function ($q) use ($checkIn, $checkOut) {
                    $q->where('LeavingTime', '>=', Carbon::parse($checkIn))
                        ->where('LeavingTime', '<=', Carbon::parse($checkOut));
                });
            })->get();

        return view('rooms', compact('houses'));
    }

}
