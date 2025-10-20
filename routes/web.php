<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('Admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Employee routes
Route::middleware(['auth', 'is_employee'])->prefix('employee')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
});



Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
    Route::put('/success_stories/{id}', [SuccessStoryController::class, 'update'])->name('admin.success_stories.update');
    Route::post('/success_stories', [SuccessStoryController::class, 'store'])->name('admin.success_stories.store');
    Route::delete('/success_stories/{id}', [SuccessStoryController::class, 'destroy'])->name('admin.success_stories.destroy');

    

    Route::get('/partners/list', [PartnerController::class, 'index'])->name('admin.partners.index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('admin.partners.create');
    Route::get('/partners/{id}', [PartnerController::class, 'show'])->name('admin.partners.show');
    Route::put('/partners/{id}', [PartnerController::class, 'update'])->name('admin.partners.update');
    Route::post('/partners', [PartnerController::class, 'store'])->name('admin.partners.store');
    Route::delete('/partners/{id}', [PartnerController::class, 'destroy'])->name('admin.partners.destroy');

    

    Route::get('/banners/list', [BannerController::class, 'index'])->name('admin.banners.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
    Route::get('/banners/{id}', [BannerController::class, 'show'])->name('admin.banners.show');
    Route::put('/banners/{id}', [BannerController::class, 'update'])->name('admin.banners.update');
    Route::post('/banners', [BannerController::class, 'store'])->name('admin.banners.store');
    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');


        // create user routes
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/{id}', [UserController::class, 'show'])->name('admin.users.show');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');


});



    //Post Contact Form
    Route::post('/contact', [ContactUsController::class, 'store'])->name('frontend.contact.store');

    Route::get('/', [FrontendController::class, 'home'])->name('home');

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


    //Service Pages
    Route::get('/services/admission_support', function() { return view('Frontend.service.admission_support');})->name('services.admission_support');
    Route::get('/services/air_tickating', function() { return view('Frontend.service.air_tickating');})->name('services.air_tickating');
    Route::get('/services/health_life_sciences', function() { return view('Frontend.service.health_life_sciences');})->name('services.health_life_sciences');
    Route::get('/services/postarrival', function() { return view('Frontend.service.postarrival');})->name('services.postarrival');
    Route::get('/services/scholarships', function() { return view('Frontend.service.scholarships');})->name('services.scholarships');
    Route::get('/services/travel_support', function() { return view('Frontend.service.travel_support');})->name('services.travel_support');
    Route::get('/services/visa_assistance', function() { return view('Frontend.service.visa_assistance');})->name('services.visa_assistance');

    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');


    //Service Pages
    Route::get('/destinations/australia', function() { return view('Frontend.destinations.australia');})->name('destinations.australia');
    Route::get('/destinations/canada', function() { return view('Frontend.destinations.canada');})->name('destinations.canada');
    Route::get('/destinations/europe', function() { return view('Frontend.destinations.europe');})->name('destinations.europe');
    Route::get('/destinations/new_zealand', function() { return view('Frontend.destinations.new_zealand');})->name('destinations.new_zealand');
    Route::get('/destinations/uk', function() { return view('Frontend.destinations.uk');})->name('destinations.uk');
    Route::get('/destinations/usa', function() { return view('Frontend.destinations.usa');})->name('destinations.usa');





require __DIR__.'/auth.php';
