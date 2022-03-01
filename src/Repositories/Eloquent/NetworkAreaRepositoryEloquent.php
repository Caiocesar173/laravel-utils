<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\NetworkArea;
use Caiocesar173\Utils\Repositories\NetworkAreaRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;


/**
 * Class NetworkAreaRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class NetworkAreaRepositoryEloquent extends RepositoryAbstract implements NetworkAreaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return NetworkArea::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
