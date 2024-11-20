<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Daftarkan alias middleware
        Route::aliasMiddleware('admin', \App\Http\Middleware\AdminMiddleware::class);
    }
}
