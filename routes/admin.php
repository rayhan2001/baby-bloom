<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
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

        Route::controller(CategoryController::class)->group(function () {
            Route::get('categories', 'index')->name('categories.index');
            Route::post('categories/store', 'store')->name('categories.store');
            Route::put('categories/update/{id}', 'update')->name('categories.update');
            Route::delete('categories/delete/{id}', 'destroy')->name('categories.destroy');
        });

    });

    Route::fallback(function () {
        return response()->view('admin.pages.404', [], 404);
    });
});

