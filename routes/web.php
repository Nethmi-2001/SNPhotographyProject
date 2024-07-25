<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryNewController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocationNewController;
use App\Http\Controllers\photographerController;
use App\Http\Controllers\BookingNewController;
use App\Http\Controllers\UserHomeController;
//use App\Http\Controllers\userPhotographerController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Login', function () {
    echo'SUDESH NIRMAL PHOTOGRAPHY';
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//use App\Http\Controllers\AdminController;
//use App\Http\Controllers\BookingController;

//Route::middleware(['auth', 'admin'])->group(function () {
  //  Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    //Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');
    //Route::post('/admin/bookings', [BookingController::class, 'store'])->name('admin.bookings.store');

    //Route::get('/admin/locations', [LocationController::class, 'index'])->name('admin.locations');
    //Route::post('/admin/locations', [LocationController::class, 'store'])->name('admin.locations.store');
//});

Route::get('/category', [CategoryNewController::class, 'index'])->name('category');

//booking functions
Route::get('/booking', [BookingNewController::class, 'index'])->name('booking');
Route::post('/save-details', [BookingNewController::class, 'store'])->name('save.details');

Route::get('/location', [LocationNewController::class, 'index'])->name('location');

Route::get('/photographer', [photographerController::class, 'index'])->name('photographer');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UserHomeController::class, 'index'])->name('home');

    Route::resource('categories', CategoryNewController::class);
Route::resource('packages', PackageController::class);

//Route::middleware(['auth'])->group(function () {
  //  Route::resource('locations', LocationController::class);
    //Route::middleware(['auth'])->group(function () {
    //Route::resource('photographers', PhotographerController::class);
    });
//});
//});

Route::get('/categoryhome', [CategoryNewController::class, 'home'])->name('categoryhome');

Route::get('/bookinghome', [BookingNewController::class, 'home'])->name('bookinghome');

Route::get('/locationhome', [LocationNewController::class, 'home'])->name('locationhome');

Route::get('/photographerhome', [photographerController::class, 'home'])->name('photographerhome');





