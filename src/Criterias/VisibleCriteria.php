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
    /**
     * Apply criteria in query repository
     *
     * @param $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $statusArray = $this->getStatus();
        $table = $repository->makeModel()->getTable();
        $query = $model->whereIn("{$table}.status", $statusArray);
      
        if ($this->viewDeleted()) 
            $query->withTrashed()->where("{$table}.deleted_at" ,'!=', null);
        
        return $query;
    }

    private function getStatus()
    {
        $baseStatus = [StatusEnum::ACTIVE];

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
