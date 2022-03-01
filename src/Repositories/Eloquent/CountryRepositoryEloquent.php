<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Repositories\CountryRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;


/**
 * Class CountryRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class CountryRepositoryEloquent extends RepositoryAbstract implements CountryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Country::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
