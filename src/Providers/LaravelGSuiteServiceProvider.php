<?php

namespace ColoredCow\LaravelGSuite\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelGSuiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__ . '/../config/laravel-gsuite.php' => config_path('laravel-gsuite.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/services.php',
            'services'
        );
    }
}
