<?php

namespace Caiocesar173\Utils\Providers;

use Caiocesar173\Utils\Exceptions\ApiException;
use Illuminate\Routing\Router;
use Illuminate\Contracts\Debug\ExceptionHandler;

use Caiocesar173\Utils\Exceptions\NotFoundException;
use Caiocesar173\Utils\Traits\RepositoryServiceProviderTrait;

use Caiocesar173\Utils\Http\Middleware\LogMiddleware;
use Caiocesar173\Utils\Http\Middleware\AuthApiMiddleware;
use Caiocesar173\Utils\Http\Middleware\SetUserApiMiddleware;
use Caiocesar173\Utils\Http\Middleware\AccessControlMiddleware;
use Illuminate\Support\ServiceProvider;

class UtilsServiceProvider extends ServiceProvider
{
    use RepositoryServiceProviderTrait;

    public function boot()
    {
        if (env('UTILS_WEB_ROUTES_ENABLE') === TRUE)
            $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        if (env('UTILS_API_ROUTES_ENABLE') === TRUE)
            $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        
        if (env('UTILS_LOGS_ENABLE') === TRUE)
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/LogMigrations');
        
        if( env('UTILS_MIGRATIONS_ENABLE') === TRUE ) 
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/Migrations');

        if( env('UTILS_PERMISSION_ENABLE') === TRUE ) 
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/Permission');
        
        if( env('UTILS_GEOLOC_ENABLE') === TRUE ) 
        {
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Geo');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Zones');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Language');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Currency');
            $this->loadMigrationsFrom(__DIR__ .'/../../Database/GeoInfo/Areas');
        }

        $this->app->register(SeedServiceProvider::class);
        $this->app->singleton(ExceptionHandler::class, NotFoundException::class);
        $this->app->singleton(ExceptionHandler::class, ApiException::class);

        if( env('UTILS_LOGS_ENABLE') === TRUE ) 
            app(Router::class)->aliasMiddleware('Log', LogMiddleware::class);

        if( env('UTILS_AUTHENTICATION_ENABLE') === TRUE ) 
        {
            $this->app->register(\Tymon\JWTAuth\Providers\LaravelServiceProvider::class);

            app(Router::class)->aliasMiddleware('AuthApi', AuthApiMiddleware::class);
            app(Router::class)->aliasMiddleware('SetUserApi', SetUserApiMiddleware::class);
            app(Router::class)->aliasMiddleware('AccessControl', AccessControlMiddleware::class);
        }

        
    }

    public function register()
    {
        $this->registerLocalRepository('src', __DIR__ .'/../Repositories');
    }
}