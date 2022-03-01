<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Permission;
use Caiocesar173\Utils\Repositories\PermissionRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;


/**
 * Class PermissionRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class PermissionRepositoryEloquent extends RepositoryAbstract implements PermissionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Permission::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
