<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $Reviews = Review::all();

        return view('Reviews.index', compact('Reviews'));
    }


    public function create()
    {
        $reviews = Review::all();
        return view('Reviews.create', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('/Reviews')->with('success', 'Review added successfully!');
    }

    public function destroy(Review $Review)
    {
        $Review->delete();
        return redirect('/Reviews')->with('success', 'Review deleted successfully!');
    }
}