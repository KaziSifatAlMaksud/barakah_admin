<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the banners.
     */
  public function index()
    {
    
            // Fetch banners in descending order with pagination
            $banners = \App\Models\Banner::orderBy('id', 'desc')->paginate(10);

            return view('Admin.bannar.bannar_view', compact('banners'));

       
    }


    /**
     * Show the form for creating a new banner.
     */
    public function create()
    {
        return view('Admin.bannar.bannar_create');
    }

    /**
     * Store a newly created banner in storage.
     */
  public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1', // 0 = Inactive, 1 = Active
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/banners'), $imageName);
            $validated['image'] = 'uploads/banners/' . $imageName;
        }

        \App\Models\Banner::create($validated);

        $banners = \App\Models\Banner::orderBy('id', 'desc')->paginate(10);

        return view('Admin.bannar.bannar_view', [
            'banners' => $banners,
            'successMessage' => 'Banner created successfully!',
        ]);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Return back with validation errors
        return back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Return view with error message
        $banners = \App\Models\Banner::orderBy('id', 'desc')->paginate(10);
        return view('Admin.banner.bannar_view', [
            'banners' => $banners,
            'errorMessage' => 'Something went wrong: ' . $e->getMessage(),
        ]);
    }
}


    /**
     * Display the specified banner details.
     */
    public function show($id)
    {
        try {
            $banner = Banner::findOrFail($id);
            return view('admin.banners.show', compact('banner'));
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.banners.index', ['error' => '⚠️ Banner not found or deleted.']);
        }
    }

    /**
     * Remove the specified banner from storage.
     */
    public function destroy($id)
    {
        try {
            $banner = Banner::findOrFail($id);

            // Delete image if exists
            if ($banner->image && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }

            $banner->delete();

            return redirect()
                ->route('admin.banners.index', ['success' => 'Banner deleted successfully!']);
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.banners.index', ['error' => 'Failed to delete banner: ' . $e->getMessage()]);
        }
    }
}
