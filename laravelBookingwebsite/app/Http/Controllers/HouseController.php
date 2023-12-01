<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Core\File as FakerFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $houses = House::with('User')->get();
    //     return view('leaser.house.index', ['houses' => $houses]);
    // }



    public function index()
    {
        // Retrieve user ID from the session
        $userId = session('iduser');

        // Fetch houses associated with the specific user using the user ID
        $houses = House::whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        })->get();

        return view('leaser.house.index', ['houses' => $houses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leaser.house.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Address' => 'required',
            'Type' => 'required',
            'NumberOfRoom' => 'required|integer',
            'NumberOfToilet' => 'required|integer',
            'NumberOfBelcony' => 'required|integer',
            'Rent' => 'required|integer',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Status' => 'required|in:available,booked',
            'Location' => 'required',
            'UserID' => 'required|exists:users,id',
        ]);
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/rooms', $imageName);
            // Update the data array with the new image name
            $data['Image'] = $imageName;
        }
        $newHouse = House::create($data);
        return redirect(route('house.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $houses = House::all();
         // Fetch all houses from the database
        return view('house.index', ['houses' => $houses]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {


        return view('leaser.house.edit', ['house' => $house]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        $data = $request->validate([
            'Address' => 'required',
            'Type' => 'required',
            'NumberOfRoom' => 'required|integer',
            'NumberOfToilet' => 'required|integer',
            'NumberOfBelcony' => 'required|integer',
            'Rent' => 'required|integer',
            'Status' => 'required|in:available,booked',
            'Location' => 'required',
            'UserID' => 'required|exists:users,id',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/rooms', $imageName);

            // Delete the existing image file
            $destinationPath = 'public/images/rooms' . $house->Image;
            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }
            // Update the data array with the new image name
            $data['Image'] = $imageName;
        }
        // Update house data with the new values
        $house->update($data);
        return redirect(route('house.index'))->with('success', 'House updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $imagePath = 'public/images/rooms' . $house->Image;

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        $house->delete();
        return redirect(route('house.index'))->with('success', 'House deleted successfully');
    }

    public function roomsdetiels()
    {
        return view('room-detiels');
    }

}
