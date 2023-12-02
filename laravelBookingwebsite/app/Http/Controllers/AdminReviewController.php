<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index()
    {
        // Retrieve reviews with associated user names using eager loading
        $reviews = Review::with('user')->get();
// dd($reviews);
        return view('admin.reviews.review', ['reviews' => $reviews]);
    }
    public function destroy(Review $Review)
    {
        $Review->delete();
        return redirect(route('admin.reviews.index'));
    }


}
