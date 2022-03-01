<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Http\Requests\RequestLogRequest;


class RequestLogService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(RequestLogRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(RequestLogRequest::class);
    }
}