<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
   public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10); // 10 per page
        return view('Admin.contact.index', compact('contacts'));
    }


    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'name'           => 'nullable|string|max:20',
            'email'          => 'required|email',
            'phone'          => 'required|string',
            'project_option' => 'nullable|string',
            'subject'        => 'required|string',
            'message'        => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }

    public function delete_contact($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Could not delete.');
        }
    }



    
}
