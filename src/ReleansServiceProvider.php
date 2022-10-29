<?php

namespace Ahmedhegazee\Releans;

use Ahmedhegazee\Releans\Services\ClientService;
use Illuminate\Support\ServiceProvider;

class ReleansServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/releans.php',
            'releans'
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