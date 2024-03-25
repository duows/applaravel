<?php

namespace App\Providers;

use App\Services\AutorServiceInterface;
use App\Services\AutorService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            AutorServiceInterface::class, 
            AutorService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
