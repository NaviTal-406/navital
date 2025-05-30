<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $hospitals = Hospital::paginate(6);
        return view('pages.search', compact('hospitals'));
    }

    public function detail($slug){
        $hospital = Hospital::with(['category'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail', compact('hospital'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryId = $request->input('category_id');
        $layanan = $request->input('layanan');

        $hospitals = Hospital::query()
            ->when($keyword, function ($query) use ($keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('name', 'LIKE', "%$keyword%")
                        ->orWhere('description', 'LIKE', "%$keyword%")
                        ->orWhere('address', 'LIKE', "%$keyword%")
                        ->orWhereHas('category', function ($q2) use ($keyword) {
                            $q2->where('name', 'LIKE', "%$keyword%");
                        })
                        ->orWhereHas('layanans', function ($q2) use ($keyword) {
                            $q2->where('name', 'LIKE', "%$keyword%");
                        })
                        ->orWhereHas('layanans.dokters', function ($q2) use ($keyword) {
                            $q2->where('name', 'LIKE', "%$keyword%");
                        });
                });
            })
            ->when($categoryId, function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->when($layanan, function ($query) use ($layanan) {
                $query->whereHas('layanans', function ($q) use ($layanan) {
                    $q->where('name', $layanan);
                });
            })
            ->paginate(6);

        return view('pages.search', compact('hospitals'));
    }
}