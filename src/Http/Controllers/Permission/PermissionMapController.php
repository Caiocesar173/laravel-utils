<?php

namespace Caiocesar173\Utils\Http\Controllers\Permission;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\ControllerAbstract;
use Caiocesar173\Utils\Services\PermissionMapService;

class PermissionMapController extends ControllerAbstract
{
    protected function getService(): ServiceAbstract
    {
        return app(PermissionMapService::class);
    }
}
