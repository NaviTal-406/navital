<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::with('hospital')->get();
        $hospitals = Hospital::all();
        return view('pages.admin.layanan.index', compact('layanans', 'hospitals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'hospital_id' => 'required|exists:hospitals,id',
        ]);

        Layanan::create($request->all());

        return redirect()->back()->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Layanan berhasil dihapus!');
    }
}