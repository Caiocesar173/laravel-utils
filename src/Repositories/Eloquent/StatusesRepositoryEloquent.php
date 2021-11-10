<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Statuses;
use Caiocesar173\Utils\Repositories\StatusesRepository;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;


/**
 * Class StatusesRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class StatusesRepositoryEloquent extends CustomBaseRepository implements StatusesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Statuses::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
