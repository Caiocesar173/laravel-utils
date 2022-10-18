<?php

namespace Caiocesar173\Utils\Http\Controllers\Permission;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Services\PermissionService;
use Caiocesar173\Utils\Abstracts\ControllerAbstract;

class PermissionController extends ControllerAbstract
{
    protected function getService(): ServiceAbstract
    {
        return app(PermissionService::class);
    }
}
