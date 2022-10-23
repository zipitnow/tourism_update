<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\ArtifactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.homepage');
});

// Frontend Page
// Torist Index Page
Route::get('/tourist', [TouristController::class, 'index'])->name('tourist.site');
// Torist Create Card
Route::get('/tourist/create', [TouristController::class, 'create'])->name('tourist.create');

//Tourist Listing store
Route::post('/tourist/store', [TouristController::class, 'store']);

//Tourist Listing display Page
Route::get('/tourist/listing', [TouristController::class, 'listing'])->name('tourist.list');

// Torist Edit Page
Route::get('/tourist/{listings}/edit', [TouristController::class, 'edit']);


//Update Listing
Route::put('/tourist/{listings}', [TouristController::class, 'update']);

//Update Listing
Route::delete('/tourist/{listing}', [TouristController::class, 'destroy']);

// Torist Single Page
Route::get('/tourist/{listings}', [TouristController::class, 'show']);


// Frontend Page
// Artifact Index Page
Route::get('/artifact', [ArtifactController::class, 'index'])->name('artifact.site');


//Creating the Artifact Card
// Artifact Create Card
Route::get('/artifact/create', [ArtifactController::class, 'create'])->name('artifact.create');
//Artifact Listing store
Route::post('artifact/store', [ArtifactController::class, 'store']);


//Artifact Listing display Page
Route::get('/artifact/listing', [ArtifactController::class, 'listing'])->name('artifact.list');


//Editing the Artifact Card
// Artifact Edit Page
Route::get('/artifact/{listings}/edit', [ArtifactController::class, 'edit']);
//Update Listing
Route::put('/artifact/{listings}', [ArtifactController::class, 'update']);

//Delete Listing
Route::delete('/artifact/{listing}', [ArtifactController::class, 'destroy']);


// Artifact Single Page
Route::get('/artifact/{listings}', [ArtifactController::class, 'show']);



// Booking
// Torist Index Page
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index')->name('booking');
//Booking Listing display Page
Route::get('/booking/listing', [BookingController::class, 'listing'])->name('booking.list');
//Delete Booking
Route::delete('/booking/{listing}', [BookingController::class, 'destroy']);
// Booked Details
Route::get('/booking/{listings}', [BookingController::class, 'view'])->name('booking.view');



// Payment
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment.index');
Route::get('/payment/tourist', [PaymentController::class, 'artifactlisting'])->name('payment.tourist');
//Booking Listing display Page
Route::get('/payment/artifact', [PaymentController::class, 'touristlisting'])->name('payment.artifact');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
