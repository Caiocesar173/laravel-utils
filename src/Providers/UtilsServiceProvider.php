<?php

namespace Caiocesar173\Utils\Providers;

use Caiocesar173\Utils\Exceptions\Handlers\AuthenticationExceptions;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

use Laravel\Passport\Passport;
use OwenIt\Auditing\AuditingServiceProvider;

use Caiocesar173\Utils\Http\Middleware\AccessControlMiddleware;
use Caiocesar173\Utils\Http\Middleware\RequestLogMiddleware;
use Caiocesar173\Utils\Traits\RepositoryServiceProviderTrait;

class UtilsServiceProvider extends ServiceProvider
{
    use RepositoryServiceProviderTrait;

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../Database/LogMigrations');
        app(Router::class)->aliasMiddleware('Log', RequestLogMiddleware::class);

        $this->loadMigrationsFrom(__DIR__ . '/../../Database/Migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../../Database/Permission');

        if (env('UTILS_GEOLOC_ENABLE') === TRUE) {
            $this->loadMigrationsFrom(__DIR__ . '/../../Database/GeoInfo/Geo');
            $this->loadMigrationsFrom(__DIR__ . '/../../Database/GeoInfo/Zones');
            $this->loadMigrationsFrom(__DIR__ . '/../../Database/GeoInfo/Language');
            $this->loadMigrationsFrom(__DIR__ . '/../../Database/GeoInfo/Currency');
            $this->loadMigrationsFrom(__DIR__ . '/../../Database/GeoInfo/Areas');
        }

        $this->app->register(SeedServiceProvider::class);
        $this->app->register(AuditingServiceProvider::class);
        $this->app->singleton(AuthenticationExceptions::class);

        Passport::routes();
        app(Router::class)->aliasMiddleware('AccessControl', AccessControlMiddleware::class);
    }

    public function register()
    {
        $this->registerLocalRepository(__DIR__ . '/../Repositories');

        $this->app->singleton(
            Illuminate\Contracts\Debug\ExceptionHandler::class,
            Caiocesar173\Utils\Exceptions\NotFoundException::class,
            AuthenticationExceptions::class
        );
    }
}
