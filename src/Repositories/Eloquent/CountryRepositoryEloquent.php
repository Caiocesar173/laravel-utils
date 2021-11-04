<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Contry;
use Caiocesar173\Utils\Repositories\ContryRepository;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;


/**
 * Class CountryRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class CountryRepositoryEloquent extends CustomBaseRepository implements ContryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contry::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
