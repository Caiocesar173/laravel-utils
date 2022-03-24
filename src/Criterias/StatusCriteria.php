<?php

namespace Caiocesar173\Utils\Criterias;

use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class StatusCriteria.
 *
 * @package namespace Caiocesar173\Utils\Criterias;
 */
class StatusCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $viewDeleted = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.deleted.view', 'item', '', PermissionItemTypeEnum::ITEM);

        $viewBlocked = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.blocked.view', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($viewDeleted) || $viewBlocked)
            return $model->where("status", StatusEnum::ACTIVE);

        return $model;
    }
}
