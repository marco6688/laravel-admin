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
        $this->publishes([__DIR__.'/../config/admin.php' => config_path('admin.php')],'laravel-admin-config');
        $this->loadRoutesFrom(__DIR__."/../config/routes.php");
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
