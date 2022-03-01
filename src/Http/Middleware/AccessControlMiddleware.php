<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;


class AccessControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(env('UTILS_PERMISSION_ENABLE'))
        {
            $routeName = Route::getCurrentRoute()->getName();
            $routeUrl = $request->getUri();
            $route = app(PermissionItem::class)->where('code', $routeName)->first();
            if( is_null($route) )
                return ApiReturn::ErrorMessage("Item de rota não encontrado, cadastre-o e tente novamente", 404);

            $hasPermission = app(PermissionMapRepository::class)
                ->UserhasItem(auth()->user(), $route, 'item', $routeUrl, PermissionItemTypeEnum::ROUTE);
                
            if( is_string($hasPermission) )
                return ApiReturn::ErrorMessage($hasPermission, 403);
        }

        return $next($request);
    }
}
