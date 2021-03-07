<?php

namespace Creativesyntax\Contactus;

use Illuminate\Support\ServiceProvider;

class ContactusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contactus');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contactus.php', 'contactus');

        $this->publishes([
            __DIR__ . '/config/contactus.php' => config_path('contactus.php'),
        ]);
    }

    public function register()
    {

    }
}