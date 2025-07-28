<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SizeController;
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

        Route::controller(SizeController::class)->group(function () {
            Route::get('sizes', 'index')->name('sizes.index');
            Route::post('sizes/store', 'store')->name('sizes.store');
            Route::put('sizes/update/{id}', 'update')->name('sizes.update');
            Route::delete('sizes/delete/{id}', 'destroy')->name('sizes.destroy');
        });

        Route::controller(ColorController::class)->group(function () {
            Route::get('colors', 'index')->name('colors.index');
            Route::post('colors/store', 'store')->name('colors.store');
            Route::put('colors/update/{id}', 'update')->name('colors.update');
            Route::delete('colors/delete/{id}', 'destroy')->name('colors.destroy');
        });

    });

    Route::fallback(function () {
        return response()->view('admin.pages.404', [], 404);
    });
});

