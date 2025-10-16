<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ApplicationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('Admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    Route::get('/contact_us', [ContactUsController::class, 'index'])->name('admin.contact.index');
    Route::get('/contact_us/{id}', [ContactUsController::class, 'contact_details'])->name('admin.contact.details');
    Route::delete('/contact_us/{id}', [ContactUsController::class, 'delete_contact'])->name('admin.contact.delete');


    Route::get('/applications', [ApplicationController::class, 'index'])->name('admin.application.index');
    Route::get('/applications/{id}', [ApplicationController::class, 'show'])->name('admin.application.show');
    Route::delete('/applications/{id}', [ApplicationController::class, 'destroy'])->name('admin.application.delete');

    Route::get('/country', [DestinationController::class, 'view_country'])->name('admin.country.index');
    Route::post('/country', [DestinationController::class, 'country_store'])->name('admin.country.store');
    Route::get('/country/{id}', [DestinationController::class, 'show'])->name('admin.country.show');
    Route::delete('/country/{id}', [DestinationController::class, 'destroy'])->name('admin.country.destroy');

    Route::get('/success_stories/list', [SuccessStoryController::class, 'index'])->name('admin.success_stories.index');
    Route::get('/success_stories/create', [SuccessStoryController::class, 'create'])->name('admin.success_stories.create');
    Route::get('/success_stories/{id}', [SuccessStoryController::class, 'show'])->name('admin.success_stories.show');
    Route::post('/success_stories', [SuccessStoryController::class, 'store'])->name('admin.success_stories.store');
    Route::delete('/success_stories/{id}', [SuccessStoryController::class, 'destroy'])->name('admin.success_stories.destroy');


 

    Route::get('/banners/list', [BannerController::class, 'index'])->name('admin.banners.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
    Route::get('/banners/{id}', [BannerController::class, 'show'])->name('admin.banners.show');
    Route::post('/banners', [BannerController::class, 'store'])->name('admin.banners.store');
    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');


});



    //Post Contact Form
    Route::post('/contact', [ContactUsController::class, 'store'])->name('frontend.contact.store');


    Route::get('/', function() { return view('Frontend.pages.home');})->name('home');
    Route::get('/about', function() { return view('Frontend.pages.about');})->name('about');
    Route::get('/destinations', function() { return view('Frontend.pages.destinations');})->name('destinations');
    Route::get('/services', function() { return view('Frontend.pages.services');})->name('services');
    Route::get('/courses', function() { return view('Frontend.pages.courses');})->name('courses');

    Route::get('/courses/engineeringandtechnology', function() { return view('Frontend.courses.businessandManagement');})->name('courses.engineering');
    Route::get('/courses/BusinessAndManagement', function() { return view('Frontend.courses.engineeringAndTechnology');})->name('courses.business');
    Route::get('/courses/HealthLifeScience', function() { return view('Frontend.courses.HealthLifeScience');})->name('courses.health');
    Route::get('/courses/ComputingAndIT', function() { return view('Frontend.courses.ComputingAndIT');})->name('courses.computing');
    Route::get('/courses/EducationAndTeaching', function() { return view('Frontend.courses.EducationAndTeaching');})->name('courses.education');
    Route::get('/courses/HospitalityAndTourism', function() { return view('Frontend.courses.HospitalityAndTourism');})->name('courses.hospitality');
    Route::get('/courses/lawAndCriminology', function() { return view('Frontend.courses.lawAndCriminology');})->name('courses.law');  
    Route::get('/courses/ScienceAndMaths', function() { return view('Frontend.courses.ScienceAndMaths');})->name('courses.science');
    Route::get('/courses/ArtsAndHumanities', function() { return view('Frontend.courses.artsHumanities');})->name('courses.arts');
    Route::get('/courses/SocialSciences', function() { return view('Frontend.courses.SocialSciences');})->name('courses.social');
    Route::get('/courses/MediaAndDesign', function() { return view('Frontend.courses.MediaAndDesign');})->name('courses.media');
    Route::get('/courses/scienceAndEnvironment', function() { return view('Frontend.courses.scienceAndEnvironment');})->name('courses.environment');
    
    Route::get('/contact', function() { return view('Frontend.pages.contact');})->name('contact');

    Route::get('/apply_with_us', function() { return view('Frontend.pages.apply_with_us');})->name('apply_with_us');
    Route::post('/apply', [ApplicationController::class, 'store'])->name('application.store');






require __DIR__.'/auth.php';
