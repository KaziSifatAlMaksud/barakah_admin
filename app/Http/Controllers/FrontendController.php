<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $Bannars = Banner::where('status', 1)->get();
        $SuccessStories = SuccessStory::all();
        return view('Frontend.pages.home', compact('Bannars', 'SuccessStories'));
    }
}
