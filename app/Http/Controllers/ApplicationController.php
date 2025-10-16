<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Admin list
    public function index()
    {
        $applications = Application::latest()->paginate(10);
        return view('admin.applications.index', compact('applications'));
    }

    // Show single application details
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('admin.applications.show', compact('application'));
    }

    // Delete application
    public function destroy($id)
    {
        $application = Application::findOrFail($id);

        // Delete attached PDF file if exists
        if ($application->attachment_path && \Storage::disk('public')->exists($application->attachment_path)) {
            \Storage::disk('public')->delete($application->attachment_path);
        }

        $application->delete();
        return redirect()->route('admin.application.index')->with('success', 'Application deleted successfully.');
    }

    // Public: show application form
    public function create()
    {
        return view('application.create');
    }

    // Public: handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'last_edu' => 'nullable|string|max:100',
            'cgpa' => 'nullable|numeric|between:0,10',
            'edu_year' => 'nullable|digits:4|integer',
            'subject_study' => 'nullable|string|max:150',
            'degree_want' => 'nullable|string|max:100',
            'exam_type' => 'nullable|string|max:50',
            'score' => 'nullable|string|max:50',
            'preferable_un' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'attachment' => 'required|file|mimes:pdf|max:5120', // max 5 MB
        ]);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $path = $file->storeAs('applications', $filename, 'public');
            $validated['attachment_path'] = $path;
        }

        Application::create($validated);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}

