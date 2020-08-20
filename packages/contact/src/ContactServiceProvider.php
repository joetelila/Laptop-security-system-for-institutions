<?php

namespace Josseph\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views' , 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/databases/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php' , 'contact'); 
        $this->publishes([__DIR__ . '/config/contact.php' => config_path('contact.php')]);
    }
}
