<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use Caiocesar173\Utils\Entities\RequestValidation;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Repositories\RequestValidationRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class RequestValidationRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class RequestValidationRepositoryEloquent extends RepositoryAbstract implements RequestValidationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RequestValidation::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
