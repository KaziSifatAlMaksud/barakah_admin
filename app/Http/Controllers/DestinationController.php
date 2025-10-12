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
            'flag_icon'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validate file
            'bg_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096', // validate file
            'status'     => 'nullable|boolean',
        ]);

       // Handle flag icon upload
        if ($request->hasFile('flag_icon')) {
            $flagPath = $request->file('flag_icon')->store('country_flags', 'public');
            $validated['flag_icon'] = $flagPath; // e.g. "country_flags/flag.png"
        }

        // Handle background image upload
        if ($request->hasFile('bg_img')) {
            $bgPath = $request->file('bg_img')->store('country_bg', 'public');
            $validated['bg_img'] = $bgPath; // e.g. "country_bg/bg.png"
        }

        // Create country
        $country = Country::create($validated);

        // Get updated country list
        $countries = Country::orderBy('name', 'asc')->get();

       return view('Admin.pages.country', [
            'countries' => $countries,
            'new_country' => $country,
            'success' => 'Country created successfully!',
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
