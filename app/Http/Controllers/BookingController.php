<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    public function create()
    {
        return view('bookings.create'); // the blade form
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'nid_number' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'whatsapp' => 'nullable|string|max:50',
            'upload_nid' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120', // max 5MB
            'upload_passport' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'departure_city' => 'required|string|max:255',
            'destination_city' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:departure_date',
            'trip_type' => 'required|in:one-way,round-trip',
            'preferred_airline' => 'nullable|string|max:255',
            'baggage_support' => 'nullable|in:Yes,No',
            'travel_group' => 'nullable|in:Alone,Group',
            'special_requests' => 'nullable|string',
        ]);

        // store files in storage/app/public/bookings/{nid|passport}
        $nidPath = $request->file('upload_nid')->store('bookings/nids', 'public');
        $passportPath = $request->file('upload_passport')->store('bookings/passports', 'public');

        $booking = Booking::create([
            'full_name' => $validated['full_name'],
            'passport_number' => $validated['passport_number'] ?? null,
            'nid_number' => $validated['nid_number'] ?? null,
            'email' => $validated['email'] ?? null,
            'whatsapp' => $validated['whatsapp'] ?? null,
            'nid_file' => $nidPath,
            'passport_file' => $passportPath,
            'departure_city' => $validated['departure_city'],
            'destination_city' => $validated['destination_city'],
            'departure_date' => $validated['departure_date'],
            'return_date' => $validated['return_date'] ?? null,
            'trip_type' => $validated['trip_type'],
            'preferred_airline' => $validated['preferred_airline'] ?? null,
            'baggage_support' => $validated['baggage_support'] ?? 'No',
            'travel_group' => $validated['travel_group'] ?? 'Alone',
            'special_requests' => $validated['special_requests'] ?? null,
        ]);

        // optional: send email or notification here

        return redirect()->back()->with('success', 'Booking request submitted successfully.');
    }

       public function index()
    {
        // Fetch all bookings, latest first
        $bookings = Booking::orderBy('id', 'desc')->get();

            // Return view with data
            return view('Admin.booking.booking_view', compact('bookings'));
    }

        public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('Admin.booking.booking_details', compact('booking'));
    }


    public function destroy($id)
    {
        try {
            // Find the booking
            $booking = \App\Models\Booking::findOrFail($id);

            // Delete NID file if exists
            if ($booking->nid_file && file_exists(public_path($booking->nid_file))) {
                unlink(public_path($booking->nid_file));
            }

            // Delete Passport file if exists
            if ($booking->passport_file && file_exists(public_path($booking->passport_file))) {
                unlink(public_path($booking->passport_file));
            }

            // Delete booking record
            $booking->delete();

            return redirect()->route('bookings.index')
                            ->with('success', 'Booking deleted successfully!');

        } catch (\Exception $e) {
            return redirect()->route('bookings.index')
                            ->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }


}
