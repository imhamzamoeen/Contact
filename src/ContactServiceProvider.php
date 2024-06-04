<?php

namespace haamzaaay\contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // this is basically loaded with our main laravel project as we add it in providers array that loads and set the applicatoin
        // so it loads these routes cofig and files within that application
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');    // folder and second argument is package name
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/courier.php',
            'contact'
        );
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/contact'),
            __DIR__ . '/database/migrations' => database_path('migrations'),
            __DIR__ . '/Config/defaultContactMessage.php' => config_path('defaultContactMessage.php'),
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

