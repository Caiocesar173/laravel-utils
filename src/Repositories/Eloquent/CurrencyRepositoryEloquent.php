<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Currency;
use Caiocesar173\Utils\Repositories\CurrencyRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;


/**
 * Class CurrencyRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class CurrencyRepositoryEloquent extends RepositoryAbstract implements CurrencyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Currency::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
