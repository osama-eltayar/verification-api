<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PhoneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Mobile\MobileInterface',
            'App\Mobile\MobileProviders\Twilio'
        );
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
