<?php

namespace Caiocesar173\Utils\Providers;

use Illuminate\Support\ServiceProvider;

use Caiocesar173\Utils\Http\Middleware\LogMiddleware;
use Caiocesar173\Utils\Traits\RepositoryServiceProviderTrait;

class UtilsServiceProvider extends ServiceProvider
{
    use RepositoryServiceProviderTrait;

    public function boot()
    {
        if (env('UTILS_WEB_ROUTES_ENABLE') === TRUE)
            $this->loadViewsFrom(__DIR__.'/../../resources/views', 'utils');
        
        if (env('UTILS_LOGS_ENABLE') === TRUE)
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/LogMigrations');
        
        if( env('UTILS_MIGRATIONS_ENABLE') === TRUE ) 
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/Migrations');
        
        if( env('UTILS_GEOLOC_ENABLE') === TRUE ) 
        {
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Geo');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Zones');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Language');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Currency');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Areas');
        }
       
        $this->registerRepository('src', __DIR__ .'/../Repositories');
        
        $this->app->register(SeedServiceProvider::class);
        
        app('router')->middleware('BackLog', LogMiddleware::class);
    }
}