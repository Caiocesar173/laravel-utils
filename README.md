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
    UTILS_GEOLOC_ENABLE = TRUE #GeoLoc: locatins, coins, language and internet and phone zones
    
```