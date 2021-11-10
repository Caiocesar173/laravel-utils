<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\PhoneArea;
use Caiocesar173\Utils\Repositories\PhoneAreaRepository;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;


/**
 * Class PhoneAreaRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class PhoneAreaRepositoryEloquent extends CustomBaseRepository implements PhoneAreaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PhoneArea::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
