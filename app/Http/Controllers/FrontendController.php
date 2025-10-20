<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use App\Models\Partner;

class FrontendController extends Controller
{
    public function home()
    {
        $Bannars = Banner::where('status', 1)->get();

        $SuccessStories = SuccessStory::all();
        $partners = Partner::where('status', 1)->get();
        return view('Frontend.pages.home', compact('Bannars', 'SuccessStories', 'partners'));
    }
}
