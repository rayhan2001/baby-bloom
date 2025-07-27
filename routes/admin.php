<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthController::class, 'loginForm'])->name('login');
        Route::post('login', [AuthController::class, 'login'])->name('login.post');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::fallback(function () {
        return response()->view('admin.pages.404', [], 404);
    });
});
