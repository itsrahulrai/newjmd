<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');    

Route::get('/',[HomeController::class, 'index'])->name('home');
// Route::get('products',[HomeController::class, 'Products'])->name('products');

Route::get('categories/{slug?}', [HomeController::class, 'Products'])->name('products');

Route::get('/product/{slug}', [HomeController::class, 'show'])->name('product.details');


Route::get('blogs',[HomeController::class, 'blogs'])->name('blogs');
Route::get('blogs/{slug}', [HomeController::class, 'blogsDetails'])->name('blogs.details');


Route::post('submit-enquiry', [HomeController::class, 'Enquiry'])->name('enquiry.store');



Route::get('about', function () {
    return view('front.about');
})->name('about');



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







Route::fallback(function () {
    return response()->view('404', [], 404);
});


/* ======= Frontend Website  Routes End  ========== */
