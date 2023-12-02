<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class LeaserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the user ID from the session
        $userId = Session::get('iduser');

        // Fetch reviews based on the user ID
        $reviews = Review::select('reviews.Opinion', 'reviews.Rate', 'houses.Address AS HouseAddress', 'houses.Type AS HouseType', 'users.Name AS UserName')
            ->join('users', 'reviews.UserID', '=', 'users.id')
            ->join('houses', 'reviews.HouseID', '=', 'houses.HouseID')
            ->where('houses.UserID', $userId)
            ->paginate(5);

        // Pass the reviews data to the view
        return view('leaser.reviwes.view', ['reviews' => $reviews]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
