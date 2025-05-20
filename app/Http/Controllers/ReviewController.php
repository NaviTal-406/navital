<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Hospital;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $hospital_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'hospital_id' => $hospital_id,
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Review Berhasil ditambahkan');
    }
}