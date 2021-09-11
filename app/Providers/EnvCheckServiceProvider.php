<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EnvCheckServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (!file_exists(base_path('.env'))) {
            throw new \Exception(".env file not found. Please add this file. ");
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
