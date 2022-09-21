<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  App\MyService1;

class customServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('key1',MyService1::class);
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
