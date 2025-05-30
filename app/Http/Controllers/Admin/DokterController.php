<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Hospital;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('layanan.hospital')->get();
        $layanans = Layanan::with('hospital')->get();
        $hospitals = Hospital::all();
        return view('pages.admin.dokter.index', compact('dokters', 'layanans', 'hospitals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'layanan_id' => 'required|exists:layanans,id',
            'jadwal_praktik' => 'required|string',
        ]);

        Dokter::create($request->all());

        return redirect()->back()->with('success', 'Dokter berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Dokter::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Dokter berhasil dihapus!');
    }
}