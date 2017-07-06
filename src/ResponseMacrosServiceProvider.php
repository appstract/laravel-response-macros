<?php

namespace Appstract\ResponseMacros;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->make('Appstract\ResponseMacros\ResponseMacros');
    }
}
