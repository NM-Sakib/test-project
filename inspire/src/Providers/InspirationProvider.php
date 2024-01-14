<?php

namespace Sakib\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */




        public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'sakib-crud');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }




    public function boot()
    {
        //
    }
}
