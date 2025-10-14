<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\SuccessStoryController;


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

    Route::get('/country', [DestinationController::class, 'view_country'])->name('admin.country.index');
    Route::post('/country', [DestinationController::class, 'country_store'])->name('admin.country.store');
    Route::get('/country/{id}', [DestinationController::class, 'show'])->name('admin.country.show');
    Route::delete('/country/{id}', [DestinationController::class, 'destroy'])->name('admin.country.destroy');

    Route::get('/success_stories/list', [SuccessStoryController::class, 'index'])->name('admin.success_stories.index');
    Route::get('/success_stories/create', [SuccessStoryController::class, 'create'])->name('admin.success_stories.create');
    Route::get('/success_stories/{id}', [SuccessStoryController::class, 'show'])->name('admin.success_stories.show');
    Route::post('/success_stories', [SuccessStoryController::class, 'store'])->name('admin.success_stories.store');
    Route::delete('/success_stories/{id}', [SuccessStoryController::class, 'destroy'])->name('admin.success_stories.destroy');

});



    //Post Contact Form
    Route::post('/contact', [ContactUsController::class, 'store'])->name('frontend.contact.store');


    Route::get('/', function() { return view('Frontend.pages.home');})->name('home');
    Route::get('/about', function() { return view('Frontend.pages.about');})->name('about');
    Route::get('/destinations', function() { return view('Frontend.pages.destinations');})->name('destinations');
    Route::get('/services', function() { return view('Frontend.pages.services');})->name('services');
    Route::get('/courses', function() { return view('Frontend.pages.courses');})->name('courses');
    Route::get('/contact', function() { return view('Frontend.pages.contact');})->name('contact');






require __DIR__.'/auth.php';
