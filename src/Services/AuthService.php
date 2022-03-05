<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Http\Requests\AuthRequest;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;


class AuthService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(PermissionRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(AuthRequest::class);
    }

    public function information()
    {   
        $user = auth()->user();
        
        $response = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'img' => $user->avatar,
            'role' => 0,
            'date' => null
        ];

        return ApiReturn::SuccessMessage('Informações', 200, $response);
    }

    public function permission()
    {   
        $user = auth()->user();
        $permissions = app(PermissionMapRepository::class)->getUserPermissionList($user);

        return ApiReturn::SuccessMessage('Informações', 200, $permissions);
    }
}