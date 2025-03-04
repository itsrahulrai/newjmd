<?php

use App\Http\Controllers\Users\UserDashboardController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return redirect()->route('user.dashboard');
});

Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
/* ======= User Dashboard Routes  ========== */


/* ======= Project List Routes  ========== */
