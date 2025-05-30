<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $allLayanans = Layanan::distinct()->get(['name']); // hanya nama-nama unik layanan
        return view('pages.home', compact('categories', 'allLayanans'));
    }
}