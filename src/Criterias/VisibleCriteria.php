<?php

namespace Caiocesar173\Utils\Criterias;

use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class VisibleCriteria.
 *
 * @package namespace Caiocesar173\Utils\Criterias;
 */
class VisibleCriteria implements CriteriaInterface
{
    public function __construct()
    {
    }

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
        $statusArray = $this->getStatus();
        $table = $repository->makeModel()->getTable();
        return $model->whereIn("{$table}.status", $statusArray);
    }

    private function getStatus()
    {
        $baseStatus = [StatusEnum::ACTIVE];

        if ($this->viewDeleted())
            array_push($baseStatus, StatusEnum::EXCLUDED);

        if ($this->viewBlocked())
            array_push($baseStatus, StatusEnum::BLOCKED);

        if ($this->viewInactive())
            array_push($baseStatus, StatusEnum::INACTIVE);

        return $baseStatus;
    }

    private function viewDeleted()
    {
        
        return app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.deleted.view', 'item', '', PermissionItemTypeEnum::ITEM);
    }

    private function viewBlocked()
    {
        return app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.blocked.view', 'item', '', PermissionItemTypeEnum::ITEM);
    }

    private function viewInactive()
    {
        return app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.inactivated.view', 'item', '', PermissionItemTypeEnum::ITEM);
    }
}
