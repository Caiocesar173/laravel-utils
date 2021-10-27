<?php

namespace Caiocesar173\Utils\Providers;

use Illuminate\Support\ServiceProvider;

class UtilsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'utils');
        $this->loadMigrationsFrom(__DIR__ .'/../../database/migrations');
    }
}