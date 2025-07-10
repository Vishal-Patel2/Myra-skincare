<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'title'   => 'required',
        'image'   => 'nullable|image',
        'content' => 'required',
    ]);

    $image = null;
    if ($request->hasFile('image')) {
        // Generate hashed filename like xyz123.jpg
        $filename = $request->file('image')->hashName();

        // Store the image in 'public/blogs' folder with just the filename
        $request->file('image')->storeAs('blogs', $filename, 'public');

        // Save only the filename in the database
        $image = $filename;
    }

    Blog::create([
        'title'   => $request->title,
        'slug'    => Str::slug($request->title),
        'image'   => $image, // now only filename like xyz.jpg
        'content' => $request->content,
        'status'  => $request->status ?? 'active',
    ]);

    return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
}
public function show($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();
    return view('blog-details', compact('blog'));
}


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'   => 'required',
            'image'   => 'nullable|image',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('blogs', 'public');
            $blog->image = $image;
        }

        $blog->update([
            'title'   => $request->title,
            'slug'    => Str::slug($request->title),
            'content' => $request->content,
            'status'  => $request->status ?? 'active',
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success', 'Blog deleted.');
    }

    // ✅ New Method for AJAX Status Toggle
    public function toggleStatus(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $status = $request->status === 'active' ? 'active' : 'inactive';
        $blog->status = $status;
        $blog->save();

        return response()->json([
            'success' => true,
            'status' => $status,
            'message' => 'Blog status updated successfully.'
        ]);
    }


     public function frontendIndex()
    {
        $blogs = Blog::where('status', 'active')->latest()->paginate(6);
        return view('blogs', compact('blogs')); // file: resources/views/blogs/blogs.blade.php
    }


}
