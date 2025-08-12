<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Doctor;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('status', 'active')->latest()->get();
        $blogs = Blog::latest()->take(3)->get();

        // Get services where the TopCategory name is 'HIUF'
        $services = Service::whereHas('midCategory.topCategory', function ($query) {
            $query->where('name', 'HIUF');
        })->get();

        // ✅ Fetch best selling services (is_best_seller = 1)
        $bestSellers = Service::with('midCategory.topCategory.gender')
            ->where('is_best_seller', 1)
            ->where('action', 'active')
            ->get();

        return view('index', compact('doctors', 'blogs', 'services', 'bestSellers'));
    }
}
