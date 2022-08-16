<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\Situation;
use Caiocesar173\Utils\Repositories\SituationRepository;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Criterias\VisibleCriteria;

/**
 * Class SituationRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class SituationRepositoryEloquent extends RepositoryAbstract implements SituationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Situation::class;
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
