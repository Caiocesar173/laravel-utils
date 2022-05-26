<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Enum\StatusEnum;
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
        if (env('UTILS_PERMISSION_ENABLE')) {
            $user = $request->user();
            if ($user->status == StatusEnum::BLOCKED)
                return ApiReturn::ErrorMessage("Usuário Bloqueado", 403);

            if ($user->status == StatusEnum::EXCLUDED)
                return ApiReturn::ErrorMessage("Usuário Excluído", 410);

            if ($user->status == StatusEnum::INACTIVE)
                return ApiReturn::ErrorMessage("Usuário Desativado", 404);

            $routeName = Route::getCurrentRoute()->getName();
            $routeUrl = $request->getUri();

            $hasPermission = app(PermissionMapRepository::class)
                ->UserhasItem(auth()->user(), $routeName, 'item', $routeUrl, PermissionItemTypeEnum::ROUTE);

            if (is_string($hasPermission))
                return ApiReturn::ErrorMessage($hasPermission, 403);
        }

        return $next($request);
    }
}
