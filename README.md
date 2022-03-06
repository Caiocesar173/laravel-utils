# laravel-utils
Simple package of Laravel utilitaries 


When enableling the authentication method remember to implement [`jwt-auth`](https://jwt-auth.readthedocs.io/en/develop/): 

```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"  
```

```
php artisan jwt:secret
```

On `App\Modules\User.php` implement from JWTSubject:

```
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject 
```

Then below your `class User` implement the following: 
```
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
```


On your `.env` adjust the time of expiration for the token to 3days:

```
JWT_TTL=4320
```


On your `config/auth` add the gurad api and place his driver as jwt:

```
'guards' => [
        
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

The Varibles accepted on your `.env`: 

```
#Bolth the AUTHENTICATION and PERMISSION need to bee enable to work
UTILS_AUTHENTICATION_ENABLE = TRUE #Enables the JWT authentication
UTILS_PERMISSION_ENABLE = TRUE #Uses the JWT Setup and permissions for generating and  validate permissions
UTILS_STATUSES_ENABLE = TRUE #Basic statuses for all the controllers.
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