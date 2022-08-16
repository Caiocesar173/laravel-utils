# laravel-utils
Package of Laravel utilitaries 

Remember to implement [`owenit-auditing`](https://github.com/owen-it/laravel-auditing): 

```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
```

When enableling the authentication method remember to implement [`laravel-passport`](https://laravel.com/docs/passport):

```
php artisan passport:install
```

On your `config/auth` add the gurad api and place his driver as passport:

```
'guards' => [
    ...
    'api' => [
        'driver' => 'passport',
        'provider' => 'users',
    ],
],
```

On your `config/auth` inside providers replace de default User Model (App\Models\User::class):

```
'providers' => [
    ...
    'users' => [
        'driver' => 'eloquent',
        'model' => Caiocesar173\Utils\Entities\User::class,
    ],
],
```


On your `config/services` add the provider api and place his driver as passport:

```
'provider_name' => [
    client_id => env(PROVIDER_NAME_CLIENT_ID),
    client_secret => env(PROVIDER_NAME_CLIENT_SECRET),
    redirect => env(PROVIDER_NAME_URL_CALLBACK),
],
```

The Varibles accepted on your `.env`: 

```
    #Bolth the AUTHENTICATION and PERMISSION need to bee enable to work
    UTILS_AUTHENTICATION_ENABLE = TRUE #Enables the passport authentication
    UTILS_PERMISSION_ENABLE = TRUE #Uses the passport Setup and permissions for generating and  validate permissions

    UTILS_STUATION_ENABLE = TRUE #Basic statuses for all the controllers.
    UTILS_BUSINESSUNIT_ENABLE = TRUE
    UTILS_GEOLOC_ENABLE = TRUE #GeoLoc: locatins, coins, language and internet and phone zones
    UTILS_LOGS_ENABLE = TRUE #Logs | Autdit for all routes. See what comes in an out

    UTILS_MIGRATIONS_ENABLE = TRUE #Enables built in Migrations for all the internal functions
    UTILS_SEEDS_ENABLE = TRUE #Enables built in Seeds for all the migrations

    UTILS_WEB_ROUTES_ENABLE = TRUE #Enables all of the built in WEB routes from the package
    UTILS_API_ROUTES_ENABLE = TRUE #Enables all of the built in API routes from the package
    UTILS_API_AUTH_ROUTES_ENABLE = TRUE #Enables built in Permission System
    UTILS_API_PERMISSION_ROUTES_ENABLE = TRUE #Enables built in Permission System
```