<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuccessStory;
use App\Models\Banner;
use App\Models\Partner;
use App\Models\User;
use App\Models\Contact;
use App\Models\Application;

class EmployeeController extends Controller
{


    public function dashboard()
    {
        // Count total items
        $totalSuccessStories = SuccessStory::count();
        $totalBanners        = Banner::count();
        $totalPartners       = Partner::count();
        $totalUsers          = User::count();
        $totalContacts       = Contact::count();
        $totalApplications   = Application::count();

        // Pass all totals to the view
        $applications = Application::latest()->take(5)->get();
        return view('Admin.pages.dashboard', compact(
            'totalSuccessStories',
            'totalBanners',
            'totalPartners',
            'totalUsers',
            'totalContacts',
            'totalApplications',
            'applications'
        ));
    }
}
