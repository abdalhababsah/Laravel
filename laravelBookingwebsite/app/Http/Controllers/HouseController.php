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
    public function index()
    {
        $houses = House::with('User')->get();
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
            'NumberOfRoom' => 'required',
            'NumberOfToilet' => 'required',
            'NumberOfBelcony' => 'required',
            'Rent' => 'required',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Status' => 'required',
            'Location' => 'required',
            'UserID' => 'required',
        ]);

        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/rooms', $imageName);
            // Add the image name to the data array
            $data['Image'] = $imageName;
        }
        $newHouse = House::create($data);
        return redirect(route('house.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        $house = House::all();
        return view('house.index', ['house' => $house]);
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
            'NumberOfRoom' => 'required',
            'NumberOfToilet' => 'required',
            'NumberOfBelcony' => 'required',
            'Rent' => 'required',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Status' => 'required',
            'Location' => 'required',
            'UserID' => 'required',
        ]);

        if ($request->hasFile('Image')) {
            // Delete the existing image file
            $destination_path = 'public/images/rooms' . $house->Image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            // Upload the new image file
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/rooms', $imageName);
            // Update the data array with the new image name
            $data['Image'] = $imageName;
        }
        $house->update($data);
        return redirect(route('house.index'))->with('success', 'house update succesffully');
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
}
