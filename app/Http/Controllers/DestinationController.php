<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class DestinationController extends Controller
{
      public function view_country()
    {
        $countries = Country::all();
        return view('Admin.pages.country', compact('countries'));
    }

    public function country_store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string',
            'short_form' => 'required|string|max:10',
            'region'     => 'nullable|string',
            'currency'   => 'nullable|string',
            'flag_icon'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'status'     => 'nullable|boolean',
        ]);

        // Upload files if available
        if ($request->hasFile('flag_icon')) {
            $flagPath = $request->file('flag_icon')->store('country_flags', 'public');
            $validated['flag_icon'] = $flagPath;
        }

        if ($request->hasFile('bg_img')) {
            $bgPath = $request->file('bg_img')->store('country_bg', 'public');
            $validated['bg_img'] = $bgPath;
        }

        // Check if ALL fields are filled (including optional)
        $isAllFilled = 
            !empty($validated['region'] ?? null) &&
            !empty($validated['currency'] ?? null) &&
            !empty($validated['flag_icon'] ?? null) &&
            !empty($validated['bg_img'] ?? null); // boolean can be false, so use isset

        if ($isAllFilled) {
            $country = Country::create($validated);
            session()->flash('success', 'Country created successfully!');
        } else {
            session()->flash('error', 'All fields must be filled to create a country.');
            $country = null;
        }

        $countries = Country::orderBy('id', 'asc')->get();

        return view('Admin.pages.country', [
            'countries' => $countries,
            'new_country' => $country
        ]);
    }



    public function show($id)
    {
        $country = Country::findOrFail($id);
        return response()->json($country);
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);

        $validated = $request->validate([
            'name'       => 'required|string|unique:countries,name,' . $country->id,
            'short_form' => 'required|string|max:10|unique:countries,short_form,' . $country->id,
            'region'     => 'nullable|string',
            'currency'   => 'nullable|string',
            'bg_img'     => 'nullable|string',
        ]);

        $country->update($validated);
        return response()->json(['message' => 'Country updated successfully', 'data' => $country]);
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return response()->json(['message' => 'Country deleted successfully']);
    }
}
