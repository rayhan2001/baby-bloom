<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('frontend.home');
    Route::get('/shop', 'shop')->name('frontend.shop');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/faq', 'faq')->name('frontend.faq');
    Route::get('/shipping-info', 'shippingInfo')->name('frontend.shipping_info');
    Route::get('/return-policy', 'returnPolicy')->name('frontend.return_policy');
    Route::get('/size-guide', 'sizeGuide')->name('frontend.size_guide');
    Route::get('/login', 'login')->name('frontend.login');
    Route::get('/register', 'register')->name('frontend.register');
    // Route::middleware('auth')->group(function () {
    //     Route::get('/dashboard', 'dashboard')->name('frontend.dashboard')->middleware('auth');
    // });
});


Route::fallback(function () {
    return response()->view('frontend.404', [], 404);
});
