<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DrugController extends Controller
{
    public function index()
    {
        $drugs = Drug::all();
        return view('pages.admin.obat.index', compact('drugs'));
    }

    public function create()
    {
        return view('pages.admin.obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('public/drugs');

        Drug::create([
            'name' => $request->name,
            'image' => str_replace('public/', '', $imagePath),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.drugs.index')->with('success', 'Drug added successfully');
    }

    public function edit(Drug $drug)
    {
        return view('pages.admin.obat.edit', compact('drug'));
    }

    public function update(Request $request, Drug $drug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($drug->image) {
                Storage::delete('public/' . $drug->image);
            }
            
            // Store new image
            $imagePath = $request->file('image')->store('public/drugs');
            $data['image'] = str_replace('public/', '', $imagePath);
        }

        $drug->update($data);

        return redirect()->route('admin.drugs.index')->with('success', 'Drug updated successfully');
    }

    public function destroy(Drug $drug)
    {
        if ($drug->image) {
            Storage::delete('public/' . $drug->image);
        }
        
        $drug->delete();

        return redirect()->route('admin.drugs.index')->with('success', 'Drug deleted successfully');
    }
} 