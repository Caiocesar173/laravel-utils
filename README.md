# laravel-utils
Simple package of Laravel utilitaries 

When enableling the authentication method remember to implement: 
 * https://github.com/tymondesigns/jwt-auth
 * php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"  
 * php artisan jwt:secret
 * class User extends Authenticatable implements JWTSubject

UTILS_AUTHENTICATION_ENABLE = TRUE
UTILS_PERMISSION_ENABLE = TRUE
#All of the abover need to bee enable in order for them to work

UTILS_STATUSES_ENABLE = TRUE 
UTILS_BUSINESSUNIT_ENABLE = TRUE
UTILS_GEOLOC_ENABLE = TRUE #GeoLoc: locatins, coins, language and internet and phone zones
UTILS_LOGS_ENABLE = TRUE

UTILS_MIGRATIONS_ENABLE = TRUE #Enables built in Migrations for all the internal functions
UTILS_SEEDS_ENABLE = TRUE #Enables built in Seeds for all the migrations

UTILS_WEB_ROUTES_ENABLE = TRUE #Enables all of the built in WEB routes from the package
UTILS_API_ROUTES_ENABLE = TRUE #Enables all of the built in API routes from the package
UTILS_API_AUTH_ROUTES_ENABLE = TRUE #Enables built in Permission System
UTILS_API_PERMISSION_ROUTES_ENABLE = TRUE #Enables built in Permission System