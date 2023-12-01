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
        return view('rooms', ['houses' => $houses]);

    }


    public function filter(Request $request)
    {
    $housesQuery = House::query();
    if ($request->filled('NumberOfRoom')) {
        $housesQuery->where('NumberOfRoom', $request->input('NumberOfRoom'));
    }

    if ($request->filled('NumberOfToilet')) {
        $housesQuery->where('NumberOfToilet', $request->input('NumberOfToilet'));
    }

    if ($request->filled('NumberOfBelcony')) {
        $housesQuery->where('NumberOfBelcony', $request->input('NumberOfBelcony'));
    }

    $checkIn = $request->input('check_in');
    $checkOut = $request->input('check_out');

    $housesQuery->whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
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
    });

    $houses = $housesQuery->get();

    return view('rooms', compact('houses'));
}


}
