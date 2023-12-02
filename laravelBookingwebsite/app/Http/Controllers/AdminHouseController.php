<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Core\File as FakerFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminHouseController extends Controller
{

    public function index()
    {
        $houses = House::with('user')->paginate(4); // Paginate the results with 5 items per page
        return view('admin.house.index', ['houses' => $houses]);
    }



    public function create()
    {
        return view('admin.house.create');
    }

    public function store(Request $request)
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
            // 'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
        ]);


        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/rooms', $imageName);
            // Add the image name to the data array
            $data['Image'] = $imageName;
        }
        $newHouse = House::create($data);
        return redirect()->route('adminhouse.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        $house = House::paginate(4);
        return view('admin.house.index', ['houses' => $house]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {


        return view('admin.house.edit', ['house' => $house]);
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
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
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

        return redirect()->route('adminhouse.index')->with('success', 'House updated successfully');
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
        return redirect()->route('adminhouse.index')->with('success', 'House deleted successfully');
    }
}
