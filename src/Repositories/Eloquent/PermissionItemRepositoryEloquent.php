<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Repositories\PermissionItemRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;


/**
 * Class PermissionItemRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class PermissionItemRepositoryEloquent extends RepositoryAbstract implements PermissionItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PermissionItem::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
