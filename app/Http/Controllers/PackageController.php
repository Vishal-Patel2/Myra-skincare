<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'package_type' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'package_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'original_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'features' => 'required|string', // JSON string expected
        ]);

        // Handle Image Upload
        if ($request->hasFile('package_image')) {
            $filename = Str::random(40) . '.' . $request->file('package_image')->getClientOriginalExtension();
            $request->file('package_image')->storeAs('packages', $filename, 'public');
            $data['package_image'] = $filename;
        }

        $data['features'] = json_decode($data['features'], true); // JSON -> array

        Package::create($data);

        return redirect()->route('packages.index')->with('success', 'Package created successfully.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'package_type' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'package_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'original_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'features' => 'required|string', // JSON string
        ]);

        // Handle image upload
        if ($request->hasFile('package_image')) {
            // Optional: delete old image
            if ($package->package_image) {
                Storage::disk('public')->delete('packages/' . $package->package_image);
            }

            $filename = Str::random(40) . '.' . $request->file('package_image')->getClientOriginalExtension();
            $request->file('package_image')->storeAs('packages', $filename, 'public');
            $data['package_image'] = $filename;
        }

        $data['features'] = json_decode($data['features'], true); // Decode JSON string

        $package->update($data);

        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        // Delete image from storage
        if ($package->package_image) {
            Storage::disk('public')->delete('packages/' . $package->package_image);
        }

        $package->delete();

        return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }

    public function toggleStatus($id)
    {
        $package = Package::findOrFail($id);
        $package->status = $package->status === 'active' ? 'inactive' : 'active';
        $package->save();

        return response()->json([
            'status' => 'success',
            'new_status' => $package->status
        ]);
    }

    public function showPackages()
    {
        $packages = Package::where('status', 'active')->get();
        return view('packages', compact('packages'));
    }

    public function uploadImage(Request $request, $id)
    {
        $request->validate([
            'package_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $package = Package::findOrFail($id);

        // Optional: delete old image
        if ($package->package_image) {
            Storage::disk('public')->delete('packages/' . $package->package_image);
        }

        $filename = Str::random(40) . '.' . $request->file('package_image')->getClientOriginalExtension();
        $request->file('package_image')->storeAs('packages', $filename, 'public');

        $package->package_image = $filename;
        $package->save();

        return response()->json([
            'success' => true,
            'image_url' => asset('storage/packages/' . $filename)
        ]);
    }
}
