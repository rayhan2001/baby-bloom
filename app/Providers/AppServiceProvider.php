<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::middleware('admin')
            ->group(base_path('routes/admin.php'));

        View::composer('*', function ($view) {
            $view->with('authAdmin', Auth::guard('admin')->user());
        });

        Paginator::useBootstrap();
    }
}
