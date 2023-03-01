<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Http\Requests\UserRequest;
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
        if (isset($request['password']))
            $request['password'] = Hash::make($request['password']);

        return $this->getRepository()->create($request);
    }

    public function update($request, $id)
    {
        if (isset($request['password']))
            $request['password'] = Hash::make($request['newPassword']);

        $model = $this->find($id);
        return $this->getRepository()->edit($request->all(), $model);
    }

    public function information($id)
    {
        $user = $this->find($id);
        $user->avatar = $user->avatar;
        return $user;
    }

    public function permission($id)
    {
        $user = $this->find($id);
        return $user->permissions;
    }
}
