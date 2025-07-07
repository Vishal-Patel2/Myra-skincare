<?php

namespace App\Http\Controllers;


use App\Models\MidCategory;
use App\Models\TopCategory;
use Illuminate\Http\Request;

class MidCategoryController extends Controller
{
    /**
     * Display a listing of the mid categories.
     */
    public function index()
    {
        $midCategories = MidCategory::with('topCategory')->get();
        return view('admin.mid-categories.index', compact('midCategories'));
    }

    /**
     * Show the form for creating a new mid category.
     */
    public function create()
    {
        $topCategories = TopCategory::with('gender')->get(); // includes gender for dropdown labels
        return view('admin.mid-categories.create', compact('topCategories'));
    }

    /**
     * Store a newly created mid category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'top_category_id' => 'required|exists:top_categories,id',
            'name' => 'required|string|max:100|unique:mid_categories,name,NULL,id,top_category_id,' . $request->top_category_id,
        ]);

        MidCategory::create([
            'top_category_id' => $request->top_category_id,
            'name' => $request->name,
        ]);

        return redirect()->route('mid-categories.index')->with('success', 'Mid Category created successfully.');
    }

    /**
     * Show the form for editing the specified mid category.
     */
    public function edit(MidCategory $midCategory)
    {
        $topCategories = TopCategory::with('gender')->get();
        return view('admin.mid-categories.edit', compact('midCategory', 'topCategories'));
    }

    /**
     * Update the specified mid category in storage.
     */
    public function update(Request $request, MidCategory $midCategory)
    {
        $request->validate([
            'top_category_id' => 'required|exists:top_categories,id',
            'name' => 'required|string|max:100|unique:mid_categories,name,' . $midCategory->id . ',id,top_category_id,' . $request->top_category_id,
        ]);

        $midCategory->update([
            'top_category_id' => $request->top_category_id,
            'name' => $request->name,
        ]);

        return redirect()->route('mid-categories.index')->with('success', 'Mid Category updated successfully.');
    }

    /**
     * Remove the specified mid category from storage.
     */
    public function destroy(MidCategory $midCategory)
    {
        $midCategory->delete();
        return redirect()->route('mid-categories.index')->with('success', 'Mid Category deleted successfully.');
    }

    public function getTopCategories($genderId)
    {
        $topCategories = TopCategory::where('gender_id', $genderId)->get();

        return response()->json($topCategories);
    }

}