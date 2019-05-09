<?php

namespace Easy\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config' => config_path()], 'laravel-admin-config');

            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
            $this->loadRoutesFrom(__DIR__ . "/../config/routes.php");
        }
    }








    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../config/admin.php","admin");

    }

}
