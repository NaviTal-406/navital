<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DrugController extends Controller
{
    public function index()
    {
        return view('pages.drugs');
    }

    public function show(Drug $drug)
    {
        return view('pages.drugs.show', compact('drug'));
    }

    public function byLetter($letter)
    {
        try {
            $drugs = Drug::where('name', 'like', $letter . '%')
                        ->select('id', 'name', 'description', 'image')
                        ->get();
            
            return response()->json($drugs);
        } catch (\Exception $e) {
            Log::error('Error in byLetter: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch drugs'], 500);
        }
    }

    public function search(Request $request)
    {
        try {
            $query = $request->get('query');
            
            $drugs = Drug::where('name', 'like', '%' . $query . '%')
                        ->select('id', 'name', 'description', 'image')
                        ->get();
            
            return response()->json($drugs);
        } catch (\Exception $e) {
            Log::error('Error in search: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to search drugs'], 500);
        }
    }

    public function all()
    {
        try {
            Log::info('Fetching all drugs');
            $drugs = Drug::select('id', 'name', 'description', 'image')
                        ->orderBy('name')
                        ->get();
            
            Log::info('Found ' . $drugs->count() . ' drugs');
            return response()->json($drugs);
        } catch (\Exception $e) {
            Log::error('Error in all(): ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch drugs'], 500);
        }
    }
} 