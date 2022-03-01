<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Http\Requests\PermissionRequest;
use Caiocesar173\Utils\Repositories\PermissionRepository;


class PermissionService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(PermissionRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(PermissionRequest::class);
    }
}