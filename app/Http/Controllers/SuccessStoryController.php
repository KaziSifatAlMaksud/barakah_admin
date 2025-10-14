<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuccessStory;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $successStories = \App\Models\SuccessStory::orderBy('id', 'desc')->paginate(10);

        return view('Admin.pages.success_storys', compact('successStories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Admin.pages.success_storys_create');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    try {
        // ✅ Step 1: Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'university_name' => 'nullable|string|max:255',
            'scholarship' => 'nullable|string|max:255',
            'CGPA' => 'nullable|numeric|min:0|max:10',
            'country' => 'nullable|string|max:255',
            'achivement' => 'nullable|string',
            'relocated' => 'nullable|boolean',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // ✅ Step 2: Handle image upload (if provided)
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/success_stories'), $imageName);
            $validated['img'] = 'uploads/success_stories/' . $imageName;
        }

        // ✅ Step 3: Store data into database
        \App\Models\SuccessStory::create($validated);

        // ✅ Step 4: Return view with success message and updated list
        $successStories = \App\Models\SuccessStory::orderBy('id', 'desc')->paginate(10);

        return view('Admin.pages.success_storys', [
            'successStories' => $successStories,
            'successMessage' => '✅ Success story created successfully!',
        ]);

    } catch (\Illuminate\Validation\ValidationException $e) {

        return back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
 
        $successStories = \App\Models\SuccessStory::orderBy('id', 'desc')->paginate(10);
        return view('Admin.pages.success_storys', [
            'successStories' => $successStories,
            'errorMessage' => '❌ Something went wrong: ' . $e->getMessage(),
        ]);
    }
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $story = \App\Models\SuccessStory::findOrFail($id);
            if ($story->image && file_exists(public_path($story->image))) {
                unlink(public_path($story->image));
            }

            $story->delete();

            return redirect()
                ->route('admin.success_stories.index')
                ->with('success', 'Success story deleted successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.success_stories.index')
                ->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

}
