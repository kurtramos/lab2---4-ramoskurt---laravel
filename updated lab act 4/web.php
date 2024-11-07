<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DummyDataController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AController;
use App\Http\Controllers\UController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\UserAccess;
use App\Http\Middleware\AdminAccess;

use App\Http\Controllers\AdminCarController;
use App\Http\Controllers\UserCarController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    // 'role:user' // Ensure this checks the 'user' role
    'isUser:user' // Ensure this checks the 'user' role
])->group(function () {
    Route::get('/user/dashboard', [UController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/dashboard', [UController::class, 'dashboard'])->name('dashboard');
    Route::get('/about', [UController::class, 'about'])->name('about');
    Route::get('/contact-us', [UController::class, 'contact'])->name('contact');
    Route::get('/brand-of-cars', [UController::class, 'brandOfCars'])->name('brand-of-cars');
    Route::get('rent-a-car', [UController::class, 'rentACar'])->name('rent-a-car');
    //reviewforms
    Route::get('/reviewforms', [UController::class, 'reviewforms'])->name('reviewforms');
    //indiv post
    Route::get('/indivpost', [UserCarController::class, 'index'])->name('indivpost');


});
// Admin Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isAdmin:admin'
        // 'role:admin'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admindashboard');
    })->name('admin.dashboard');

    // Admin Dashboard
    // Route::get('/dashboard', [AController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/cars/add', [AdminCarController::class, 'create'])->name('addcar');
    Route::get('/profile', [AController::class, 'profile'])->name('profile');
    Route::get('/hobbies', [AController::class, 'hobbies'])->name('hobbies');
    Route::get('/favorite-movies', [AController::class, 'favoriteMovies'])->name('favorite-movies');
    Route::get('/owned-cars', [AController::class, 'ownedCars'])->name('owned-cars');
    Route::get('/cars-for-rent', [AController::class, 'carsForRent'])->name('cars-for-rent');
    Route::get('/quotation-for-car-rent', [AController::class, 'quotationForCarRent'])->name('quotation-for-car-rent');

    //AdminCarController
    //show cars from db
    Route::get('/cars', [AdminCarController::class, 'index'])->name('cars.all');
   

   // car store, edit and update
    Route::post('/cars/store', [AdminCarController::class, 'store'])->name('cars.store'); // Store new cars
    Route::get('/cars/edit/{id}', [AdminCarController::class, 'edit'])->name('cars.edit'); // Edit cars
    Route::put('/cars/update/{id}', [AdminCarController::class, 'update'])->name('cars.update'); // Update cars

    // soft delete
    Route::delete('/cars/delete/{id}', [AdminCarController::class, 'delete'])->name('cars.delete');

    // restore
    Route::post('/cars/restore/{id}', [AdminCarController::class, 'restore'])->name('cars.restore');
    
    // permanent delete
    Route::delete('/cars/forceDelete/{id}', [AdminCarController::class, 'forceDelete'])->name('cars.forceDelete');



    //dummy deets
    Route::get('/listcars', [CarController::class, 'index'])->name('listcars');
    Route::get('/listdetails/{brand}', [CarController::class, 'show'])->name('listdetails');

}); 
