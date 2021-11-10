<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Caiocesar173\Utils\Entities\RequestLog;
use Caiocesar173\Utils\Repositories\RequestLogRepository;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;

use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class RequestLogRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class RequestLogRepositoryEloquent extends CustomBaseRepository implements RequestLogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RequestLog::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
