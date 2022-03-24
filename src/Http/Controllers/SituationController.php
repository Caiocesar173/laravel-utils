<?php

namespace Caiocesar173\Utils\Http\Controllers;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\ApiControllerAbstract;
use Caiocesar173\Utils\Services\SituationService;


class SituationController extends ApiControllerAbstract
{
    protected function getService(): ServiceAbstract
    {
        return app(SituationService::class);
    }
}
