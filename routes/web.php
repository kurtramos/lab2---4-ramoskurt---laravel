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
    // Route::get('/cars/{id}', [AdminCarController::class, 'show'])->name('cars.show');
   
    //add new cars form
    Route::get('/cars/create', [AdminCarController::class, 'create'])->name('cars.create');

    // to store new cars in database
    Route::post('/cars', [AdminCarController::class, 'store'])->name('cars.store');

    //edit cars
    Route::get('/cars/{car}/edit', [AdminCarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{car}', [AdminCarController::class, 'update'])->name('cars.update');

    //dummy deets
    Route::get('/listcars', [CarController::class, 'index'])->name('listcars');
    Route::get('/listdetails/{brand}', [CarController::class, 'show'])->name('listdetails');

}); 


// Public Routes
// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'isUser:User' // Apply the IsUser middleware here
// ])->group(function () {
    // Route::get('/', [Ucontroller::class, 'home'])->name('home');

    ////

// Route::get('/user{name}',function($name){
//     return dd('Welcome ',$name);
// });

// Route::get('/user-list', [UserController::class , 'index'])->middleware('isAdmin:Admin');
// Route::get('/user-create', [UserController::class , 'create']);



// Route::get('/dummy-data', [DummyDataController::class, 'index'])->name('dummy-data');

// Authenticated Routes
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
//     ,'isAdmin:Admin'
// ])->group(function () {

// Admin Routes with middleware to ensure only admins can access



    // Route::get('/admin/cars', [AdminCarController::class, 'index'])->name('admin.cars.index');

//new add
    // Route::get('/cars', [AdminCarController::class, 'index'])->name('cars.index');
    // Route::get('/cars/create', [AdminCarController::class, 'create'])->name('cars.create');
    // Route::post('/cars', [AdminCarController::class, 'store'])->name('cars.store');
    // Route::get('/cars/{car}/edit', [AdminCarController::class, 'edit'])->name('cars.edit');
    // Route::put('/cars/{car}', [AdminCarController::class, 'update'])->name('cars.update');
    
    // Routes for adding and editing cars

//     Route::post('/cars/store', [AdminCarController::class, 'store'])->name('storecar');

//     // Route to edit a car
// Route::get('/cars/{id}/edit', [AdminCarController::class, 'edit'])->name('editcar');
// Route::post('/cars/{id}/update', [AdminCarController::class, 'update'])->name('updatecar');

   
// });
// });

    // Admin routes
// Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts');
//     Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
//     Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
//     Route::get('/admin/posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
// });

// // User routes
// Route::group(['middleware' => ['auth', 'user']], function () {
//     Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
//     Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//     Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// });


// // Admin Routes
// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     // Admin List Posts
//     Route::get('/admin/posts', function () {
//         return view('list-posts-admin');
//     })->name('admin.posts');

//     // Admin Add Post
//     Route::get('/admin/posts/add', function () {
//         return view('add-post-admin');
//     })->name('admin.posts.add');

//     // Admin Edit Post
//     Route::get('/admin/posts/edit/{id}', function ($id) {
//         return view('edit-post-admin', ['postId' => $id]);
//     })->name('admin.posts.edit');
// });

// // User Routes
// Route::middleware(['auth'])->group(function () {
//     // View Individual Post
//     Route::get('/posts/{id}', function ($id) {
//         return view('individual-post-user', ['postId' => $id]);
//     })->name('user.posts.view');

//     // User Submit Post (Static Form)
//     Route::get('/posts/submit', function () {
//         return view('submit-post-user');
//     })->name('user.posts.submit');
// });