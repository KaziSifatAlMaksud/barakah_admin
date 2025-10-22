<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::latest()->get();
        $countries = Country::all();
        return view('Admin.universities.index', compact('universities', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'university_name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'country_id' => 'nullable|integer',
            'state' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'remarks' => 'nullable|string',
            'status' => 'boolean',
        ]);

        University::create($request->all());

        return redirect()->route('Admin.universities.index')->with('success', 'University created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        return view('universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view('universities.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        $request->validate([
            'university_name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'country_id' => 'nullable|integer',
            'state' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'remarks' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $university->update($request->all());

        return redirect()->route('universities.index')->with('success', 'University updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        $university->delete();

        return redirect()->route('universities.index')->with('success', 'University deleted successfully.');
    }
}
