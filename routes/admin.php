<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SizeController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthController::class, 'loginPage'])->name('login');
        Route::post('login', [AuthController::class, 'store'])->name('login.store');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('profile', [AuthController::class, 'profilePage'])->name('profile');
        Route::post('profile/update', [AuthController::class, 'profileUpdate'])->name('profile.update');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        Route::controller(CategoryController::class)->group(function () {
            Route::get('categories', 'index')->name('categories.index');
            Route::post('categories/store', 'store')->name('categories.store');
            Route::put('categories/update/{id}', 'update')->name('categories.update');
            Route::delete('categories/delete/{id}', 'destroy')->name('categories.destroy');
        });

        Route::controller(BrandController::class)->group(function () {
            Route::get('brands', 'index')->name('brands.index');
            Route::post('brands/store', 'store')->name('brands.store');
            Route::put('brands/update/{id}', 'update')->name('brands.update');
            Route::delete('brands/delete/{id}', 'destroy')->name('brands.destroy');
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

        Route::controller(ProductController::class)->group(function () {
            Route::get('products', 'index')->name('products.index');
            Route::get('products/create', 'create')->name('products.create');
            Route::post('products/store', 'store')->name('products.store');
            Route::get('products/edit/{id}', 'edit')->name('products.edit');
            Route::put('products/update/{id}', 'update')->name('products.update');
            Route::delete('products/delete/{id}', 'destroy')->name('products.destroy');
        });

    });

    Route::fallback(function () {
        return response()->view('admin.pages.404', [], 404);
    });
});

