<?php

namespace Caiocesar173\Utils\Http\Controllers;

use Caiocesar173\Utils\Services\UserService;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Exceptions\NotAllowedException;
use Caiocesar173\Utils\Abstracts\ApiControllerAbstract;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;

use Illuminate\Http\Request;

class UserController extends ApiControllerAbstract
{
    protected $user;
    protected $userCanViewOthers = false;

    protected function getService(): ServiceAbstract
    {
        return app(UserService::class);
    }

    protected function validatePermission()
    {
        $this->user = auth()->user();
        $this->userCanViewOthers = app(PermissionMapRepository::class)
            ->UserhasItem($this->user, 'users', 'item', '', PermissionItemTypeEnum::ITEM);
    }

    protected function validateId($id = null)
    {
        if(empty($this->user))
            $this->validatePermission();

        if (!$this->userCanViewOthers || is_null($id))
            return $this->user->id;

        return $id;
    }

    public function index(Request $request)
    {
        $this->validatePermission();

        if (!$this->userCanViewOthers)
            throw new NotAllowedException();

        return parent::index($request);
    }

    public function show($id = null)
    {
        return parent::show($this->validateId($id));
    }

    public function update(Request $request, $id = null)
    {
        return parent::update($request, $this->validateId($id));
    }

    public function destroy($id = null)
    {
        return parent::destroy($this->validateId($id));
    }

    public function recover($id = null)
    {
        return parent::recover($this->validateId($id));
    }

    public function inactivate($id = null)
    {
        return parent::inactivate($this->validateId($id));
    }

    public function activate($id = null)
    {
        return parent::activate($this->validateId($id));
    }

    public function block($id = null)
    {
        return parent::block($this->validateId($id));
    }

    public function unblock($id = null)
    {
        return parent::unblock($this->validateId($id));
    }

    public function audit($id = null)
    {
        return parent::audit($this->validateId($id));
    }

    public function information($id = null)
    {
        return $this->getService()->information($this->validateId($id));
    }

    public function permission($id = null)
    {
        return $this->getService()->permission($this->validateId($id));
    }
}
