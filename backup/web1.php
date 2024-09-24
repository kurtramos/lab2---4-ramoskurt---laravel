<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DummyDataController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\CheckAge;



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

// Public Routes
// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isUser:User' // Apply the IsUser middleware here
])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
// ->middleware('token');

Route::get('/about', function () {
    return view('about');
})->name('about');
// ->middleware('checkAge:11');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/brand-of-cars', function () {
    return view('brand-of-cars');
})->name('brand-of-cars');

Route::get('/rent-a-car', function () {
    return view('rent-a-car');
})->name('rent-a-car');
})


// Route::get('/user{name}',function($name){
//     return dd('Welcome ',$name);
// });

Route::get('/user-list', [UserController::class , 'index'])->middleware('isAdmin:Admin');
Route::get('/user-create', [UserController::class , 'create']);



// Route::get('/dummy-data', [DummyDataController::class, 'index'])->name('dummy-data');

// Authenticated Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ,'isAdmin:Admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/hobbies', function () {
        return view('hobbies');
    })->name('hobbies');

    Route::get('/favorite-movies', function () {
        return view('favorite-movies');
    })->name('favorite-movies');

    Route::get('/owned-cars', function () {
        return view('owned-cars');
    })->name('owned-cars');

    Route::get('/cars-for-rent', function () {
        return view('cars-for-rent');
    })->name('cars-for-rent');

    Route::get('/quotation-for-car-rent', function () {
        return view('quotation-for-car-rent');
    })->name('quotation-for-car-rent');

    Route::get('/listforms', function () {
        return view('listforms');
    })->name('listforms');
    
    Route::get('/listcars', [CarController::class, 'index'])->name('listcars');
    Route::get('/listdetails/{brand}', [CarController::class, 'show'])->name('listdetails');


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


// Admin Routes
Route::middleware(['auth', 'isAdmin'])->group(function () {
    // Admin List Posts
    Route::get('/admin/posts', function () {
        return view('list-posts-admin');
    })->name('admin.posts');

    // Admin Add Post
    Route::get('/admin/posts/add', function () {
        return view('add-post-admin');
    })->name('admin.posts.add');

    // Admin Edit Post
    Route::get('/admin/posts/edit/{id}', function ($id) {
        return view('edit-post-admin', ['postId' => $id]);
    })->name('admin.posts.edit');
});

// User Routes
Route::middleware(['auth'])->group(function () {
    // View Individual Post
    Route::get('/posts/{id}', function ($id) {
        return view('individual-post-user', ['postId' => $id]);
    })->name('user.posts.view');

    // User Submit Post (Static Form)
    Route::get('/posts/submit', function () {
        return view('submit-post-user');
    })->name('user.posts.submit');
});
})