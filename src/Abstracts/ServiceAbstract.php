<?php
namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;


abstract class ServiceAbstract
{   
    abstract public function getRepository() : RepositoryAbstract;
    abstract public function getRequest() : FormRequestAbstract;

    public function create($request)
    {
        return $this->getRepository()->create($request);
    }

    public function datatable($querry = null, $perPage = 6)
    {    
        $datatable = $this->getRepository()->where($querry);
        return $datatable->paginate($perPage);
    }

    public function update($request, $id)
    {
        return $this->getRepository()->update($request->all(), $id);
    }   

    public function destroy($id)
    {
        $entity = $this->getRepository()->find($id);
        $entity->status_id = StatusEnum::EXCLUDED;
        return $entity->save();
    }  

    public function recover($id)
    {
        $entity = $this->getRepository()->find($id);
        $entity->status_id = StatusEnum::ACTIVE;
        return $entity->save();
    }   
}