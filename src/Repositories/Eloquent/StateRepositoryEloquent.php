<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\State;
use Caiocesar173\Utils\Repositories\StateRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Criterias\VisibleCriteria;

/**
 * Class StateRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class StateRepositoryEloquent extends RepositoryAbstract implements StateRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return State::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(VisibleCriteria::class));
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
