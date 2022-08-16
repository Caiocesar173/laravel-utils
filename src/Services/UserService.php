<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Http\Requests\UserRequest;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;
use Caiocesar173\Utils\Repositories\UserRepository;

use Illuminate\Support\Facades\Hash;


class UserService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(UserRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(UserRequest::class);
    }

    public function create($request)
    {   
        $request['password'] = Hash::make($request['password']);
        return $this->getRepository()->create($request);
    }

    public function update($request, $id)
    {   

        
        if(isset( $request['password']))
            $request['password'] = Hash::make($request['newPassword']);

        $model = $this->find($id);
        return $this->getRepository()->edit($request->all(), $model);
    }

    public function information($id)
    {   
        $user = $this->find($id);
        $avatar = $user->avatar;

        unset($avatar["id"]);
        unset($avatar["responsable_type"]);
        unset($avatar["responsable_id"]);
        unset($avatar["status"]);
        unset($avatar["created_at"]);
        unset($avatar["updated_at"]);

        $user->avatar = $avatar;    
        return ApiReturn::SuccessMessage('Informações', 200, $user);
    }

    public function permission($id)
    {   
        $user = $this->find($id);
        $permissions = app(PermissionMapRepository::class)->getUserPermissionList($user);
        return ApiReturn::SuccessMessage('Informações', 200, $permissions);
    }
}