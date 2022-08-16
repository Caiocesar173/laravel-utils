<p align="center" id="project-title">
    <img width="200" src="https://cacodes.com.br/img/logo/logo.svg" align="center" alt="GitHub Readme Stats" />
</p>

# Laravel Utils
---

This is a Laravel package which created to make your life easier.
The package comes with most of everything you may need for develop large applications with less effort.

## Considerations

- **Laravel Utils** comes with [`laravel-passport`](https://laravel.com/docs/passport) already setup.
- Login and CRUD for the User is implemented whith route middlewares.
- Permission system is implemented whith route middlewares.
- **Laravel Utils** comes with a status system defined.


## Installation

1. Install the package via composer:
    ```shell
    composer require caiocesar173/laravel-utils
    ```

2. publish owenit via the following command:
    ```shell
    php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
    ```

3. On your `config/auth` add the gurad api and place his driver as passport:
    ```shell
    'guards' => [
        ...
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],
    ```

4. On your `config/auth` inside providers replace de default User Model (App\Models\User::class):
    ```shell
    'providers' => [
        ...
        'users' => [
            'driver' => 'eloquent',
            'model' => Caiocesar173\Utils\Entities\User::class,
        ],
    ],
    ```

5. Execute migrations via the following command:
    ```shell
    php artisan migrate
    ```

6. Setup [`laravel-passport`](https://laravel.com/docs/passport) via the following command:
    ```shell
    php artisan passport:install
    ```

7. Seed the database via the following command:
    ```shell
    php artisan db:seed
    ```
8. Done!


# Social Login
On your `config/services` add the provider api and place his driver as passport:

```
'provider_name' => [
    client_id => env(PROVIDER_NAME_CLIENT_ID),
    client_secret => env(PROVIDER_NAME_CLIENT_SECRET),
    redirect => env(PROVIDER_NAME_URL_CALLBACK),
],
```

# Envirement Varibles
The Varibles accepted on your `.env`: 

```
    UTILS_GEOLOC_ENABLE = TRUE #GeoLoc: locatins, coins, language and internet and phone zones
```