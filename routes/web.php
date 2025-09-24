<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

});


Route::get('/contact', function() {
    return view('Frontend.pages.contact');
})->name('contact');

Route::post('/contact', [ContactUsController::class, 'store'])->name('frontend.contact.store');




require __DIR__.'/auth.php';
