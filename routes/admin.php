<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::match(['GET', 'POST'], 'login', [AuthController::class, 'login'])->name('login');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::match(['GET', 'POST'], 'profile', [AuthController::class, 'profileUpdate'])->name('profile');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    });

    Route::fallback(function () {
        return response()->view('admin.pages.404', [], 404);
    });
});
