<?php

use Illuminate\Support\Facades\Route;

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'admin.dashboard';
    })->name('admin.dashboard');
    
    // Add more admin routes here
});