<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


Route::get('/', function () {
    return view('front.index');
})->name('home');


Route::get('about', function () {
    return view('front.about');
})->name('about');

Route::get('blogs', function () {
    return view('front.blogs');
})->name('blogs');

Route::get('blogs-details', function () {
    return view('front.blogs-details');
})->name('blogs.details');

Route::get('products', function () {
    return view('front.products');
})->name('products');

Route::get('products-details', function () {
    return view('front.products-details');
})->name('products.details');


Route::get('contact', function () {
    return view('front.contact');
})->name('contact');


require __DIR__.'/auth.php';



Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
/* ======= Website  Routes  ========== */





/* ======= Frontend Website  Routes Start  ========== */





// Show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle registration
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Handle recharge
Route::post('/recharge/{userId}', [RegisterController::class, 'recharge'])->name('recharge');










/* ======= Frontend Website  Routes End  ========== */
