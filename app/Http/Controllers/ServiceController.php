<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\MidCategory;
use App\Models\TopCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
   public function index(Request $request)
{
    $query = Service::with('midCategory.topCategory.gender');

    if ($request->filled('gender_id')) {
        $query->whereHas('midCategory.topCategory.gender', function ($q) use ($request) {
            $q->where('id', $request->gender_id);
        });
    }

    if ($request->filled('top_category_id')) {
        $query->whereHas('midCategory.topCategory', function ($q) use ($request) {
            $q->where('id', $request->top_category_id);
        });
    }

    if ($request->filled('mid_category_id')) {
        $query->whereHas('midCategory', function ($q) use ($request) {
            $q->where('id', $request->mid_category_id);
        });
    }

    // ✅ Order by latest created services
    $services = $query->orderBy('created_at', 'desc')->paginate(15);


    $topCategories = TopCategory::with('gender')->get();
    $midCategories = MidCategory::all();
    $genders = \App\Models\Gender::all();

    return view('admin.services.index', compact('services', 'topCategories', 'midCategories', 'genders'));
}


    public function create()
    {
        $topCategories = TopCategory::all();
        return view('admin.services.create', compact('topCategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mid_category_id' => 'required|exists:mid_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'rating' => 'nullable|numeric|max:5',
            'duration' => 'nullable|string',
            'image' => 'nullable|image',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv',
            'highlight_points' => 'nullable|string',
            'overview' => 'nullable|string',
            'expected_results' => 'nullable|string',
            'why_choose' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services/images', 'public');
            $validated['image'] = basename($path);
        }

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('services/videos', 'public');
            $validated['video'] = basename($path);
        }

        $validated['action'] = 'active';

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

   public function edit(Service $service)
{
    $service->load('midCategory.topCategory.gender');
    $topCategories = TopCategory::with('gender')->get();
    
    return view('admin.services.edit', compact(
        'service', 'topCategories'
    ));
}


    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'mid_category_id' => 'required|exists:mid_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'rating' => 'nullable|numeric|max:5',
            'duration' => 'nullable|string',
            'image' => 'nullable|image',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv',
            'highlight_points' => 'nullable|string',
            'overview' => 'nullable|string',
            'expected_results' => 'nullable|string',
            'why_choose' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete('services/images/' . $service->image);
            }
            $path = $request->file('image')->store('services/images', 'public');
            $validated['image'] = basename($path);
        }

        if ($request->hasFile('video')) {
            if ($service->video) {
                Storage::disk('public')->delete('services/videos/' . $service->video);
            }
            $path = $request->file('video')->store('services/videos', 'public');
            $validated['video'] = basename($path);
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete('services/images/' . $service->image);
        }

        if ($service->video) {
            Storage::disk('public')->delete('services/videos/' . $service->video);
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    public function toggleStatus($id)
    {
        $service = Service::findOrFail($id);
        $service->action = $service->action === 'active' ? 'inactive' : 'active';
        $service->save();

        return response()->json([
            'status' => 'success',
            'action' => $service->action
        ]);
    }

    // Frontend listing
    public function services($gender, $midSlug)
    {
        $midCategory = MidCategory::whereRaw('LOWER(REPLACE(name, " ", "-")) = ?', [$midSlug])
            ->whereHas('topCategory.gender', function ($query) use ($gender) {
                $query->whereRaw('LOWER(name) = ?', [strtolower($gender)]);
            })
            ->with('topCategory.gender')
            ->first();

        if (!$midCategory || !$midCategory->topCategory || !$midCategory->topCategory->gender || strtolower($midCategory->topCategory->gender->name) !== strtolower($gender)) {
            abort(404, 'Gender mismatch for Mid Category');
        }

        $services = Service::where('mid_category_id', $midCategory->id)->get();

        return view('services-list', compact('services', 'midCategory'));
    }

public function serviceDetail($gender, $slug)
{
    $service = Service::with('midCategory.topCategory')
        ->get()
        ->first(function ($item) use ($slug) {
            return Str::slug($item->name) === $slug;
        });

    if (!$service) {
        abort(404, 'Service not found');
    }

    $topCategoryName = optional($service->midCategory->topCategory)->name;

    if (strtolower($topCategoryName) === 'hiuf') {
        return view('service-hiuf-details', compact('service'));
    }

    return view('service-detail', compact('service'));
}



    public function updateImage(Request $request, $id)
{
    $service = Service::findOrFail($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('services/images', $filename, 'public');

        // Delete old image
        if ($service->image && \Storage::disk('public')->exists('services/images/' . $service->image)) {
            \Storage::disk('public')->delete('services/images/' . $service->image);
        }

        $service->image = $filename;
        $service->save();

        return response()->json([
            'status' => 'success',
            'new_image_url' => asset('storage/services/images/' . $filename)
        ]);
    }

    return response()->json(['status' => 'error'], 400);
}


}