<?php

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\MidCategory;
use App\Models\TopCategory;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
     
    public function index()
    {
    
         $doctors = Doctor::where('status', 'active')->latest()->get();
         return view('index', compact('doctors'));
        
    }


    

}
    