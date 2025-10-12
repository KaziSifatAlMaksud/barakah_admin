<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Admin.frontend.dashboard');
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

});



    //Post Contact Form
    Route::post('/contact', [ContactUsController::class, 'store'])->name('frontend.contact.store');


    Route::get('/home', function() { return view('Frontend.pages.home');})->name('home');
    Route::get('/about', function() { return view('Frontend.pages.about');})->name('about');
    Route::get('/destinations', function() { return view('Frontend.pages.destinations');})->name('destinations');
    Route::get('/services', function() { return view('Frontend.pages.services');})->name('services');
    Route::get('/courses', function() { return view('Frontend.pages.courses');})->name('courses');
    Route::get('/contact', function() { return view('Frontend.pages.contact');})->name('contact');






require __DIR__.'/auth.php';
