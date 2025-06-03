<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hospital;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $allLayanans = Layanan::select('name')->distinct()->get();
        
        // Get latest 10 hospitals for "Latest Listed Health Facility" section
        $latestHospitals = Hospital::with(['category'])
            ->withCount('reviews')
            ->latest()
            ->take(10)
            ->get();
        
        // Get category counts for "Health Facilities in Bandung" section
        $categoryCounts = Category::withCount('hospitals')
            ->get()
            ->map(function ($category) {
                return [
                    'id' => $category->id,
                    'name' => $category->name,
                    'count' => $category->hospitals_count
                ];
            });

        return view('pages.home', compact('categories', 'allLayanans', 'latestHospitals', 'categoryCounts'));
    }
}