<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the partners.
     */
    public function index()
    {
        // Fetch partners in descending order with pagination
        $partners = Partner::orderBy('id', 'desc')->paginate(10);

        return view('Admin.partner.partner_view', compact('partners'));
    }

    /**
     * Show the form for creating a new partner.
     */
    public function create()
    {
        return view('Admin.partner.partner_create');
    }

    /**
     * Store a newly created partner in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'alt_text' => 'nullable|string|max:255',
                'status' => 'required|in:0,1', // 0 = Inactive, 1 = Active
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ]);

            if ($request->hasFile('img')) {
                $imageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('uploads/partners'), $imageName);
                $validated['img'] = 'uploads/partners/' . $imageName;
            }

            Partner::create($validated);

            $partners = Partner::orderBy('id', 'desc')->paginate(10);

            return view('Admin.partner.partner_view', [
                'partners' => $partners,
                'successMessage' => 'Partner added successfully!',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            $partners = Partner::orderBy('id', 'desc')->paginate(10);
            return view('Admin.partner.partner_view', [
                'partners' => $partners,
                'errorMessage' => 'Something went wrong: ' . $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified partner details.
     */
    public function show($id)
    {
        try {
            $partner = Partner::findOrFail($id);
            return view('Admin.partner.partner_edit', compact('partner'));
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.partners.index', ['error' => '⚠️ Partner not found or deleted.']);
        }
    }

    /**
     * Remove the specified partner from storage.
     */
    public function destroy($id)
    {
        try {
            $partner = Partner::findOrFail($id);

            // Delete image if exists
            if ($partner->img && file_exists(public_path($partner->img))) {
                unlink(public_path($partner->img));
            }

            $partner->delete();

            return redirect()
                ->route('admin.partners.index', ['success' => 'Partner deleted successfully!']);
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.partners.index', ['error' => 'Failed to delete partner: ' . $e->getMessage()]);
        }
    }
}
