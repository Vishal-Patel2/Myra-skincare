<?php

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\MidCategory;
use App\Models\TopCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
     
public function index()
{
    // Get Female Services (gender_id = 1)
    $femaleServices = Service::select('services.*')
        ->join('mid_categories', 'services.mid_category_id', '=', 'mid_categories.id')
        ->join('top_categories', 'mid_categories.top_category_id', '=', 'top_categories.id')
        ->join('genders', 'top_categories.gender_id', '=', 'genders.id')
        ->where('genders.name', 'Women')
        ->where('services.action', 'active')
        ->with(['midCategory']) // eager load
        ->get();

    // Get Male Services (gender_id = 2)
    $maleServices = Service::select('services.*')
        ->join('mid_categories', 'services.mid_category_id', '=', 'mid_categories.id')
        ->join('top_categories', 'mid_categories.top_category_id', '=', 'top_categories.id')
        ->join('genders', 'top_categories.gender_id', '=', 'genders.id')
        ->where('genders.name', 'Men')
        ->where('services.action', 'active')
        ->with(['midCategory']) // eager load
        ->get();

 

    return view('index', compact('femaleServices', 'maleServices'));
}


}
    