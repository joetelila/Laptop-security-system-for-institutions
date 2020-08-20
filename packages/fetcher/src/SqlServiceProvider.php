<?php

namespace Josseph\SqlFetcher;

use Illuminate\Support\ServiceProvider;

class SqlServiceProvider extends ServiceProvider
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
    }
}
