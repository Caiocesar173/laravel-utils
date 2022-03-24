<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Http\Requests\SituationRequest;
use Caiocesar173\Utils\Repositories\SituationRepository;


class SituationService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(SituationRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(SituationRequest::class);
    }

    public function getByName($name) 
    {  
        return $this->getRepository()->where('name', $name)->first();
    }
}