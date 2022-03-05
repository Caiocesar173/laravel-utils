<?php

namespace Caiocesar173\Utils\Http\Controllers;

use Illuminate\Http\Request;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\ApiControllerAbstract;
use Caiocesar173\Utils\Services\AuthService;


class InformationController extends ApiControllerAbstract
{
    protected function getService(): ServiceAbstract
    {
        return app(AuthService::class);
    }

    public function information(Request $request)
    {   
        return $this->getService()->information();
    }

    public function permission(Request $request)
    {   
        return $this->getService()->permission();
    }
}
