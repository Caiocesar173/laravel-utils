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

    public function datatable(RepositoryAbstract $model, $columns, $perPage, $page)
    {    
        return $model->paginate($perPage, $columns, "paginate", $page);
    }

    public function update($request, $id)
    {
        return $this->getRepository()->update($request->all(), $id);
    }   

    public function audit($id)
    {
        $entity = $this->getRepository()->find($id);
        return $entity->audits;
    } 

    public function destroy($id)
    {
        $entity = $this->getRepository()->find($id);
        if($entity->status === StatusEnum::EXCLUDED)
            return "Informações não encontradas";
        
        $entity->status = StatusEnum::EXCLUDED;
        return $entity->save();
    }  

    public function recover($id)
    {
        $entity = $this->getRepository()->find($id);
        if($entity->status === StatusEnum::ACTIVE)
            return false;
        
        $entity->status = StatusEnum::ACTIVE;
        return $entity->save();
    }  
    
    public function unblock($id)
    {
        $entity = $this->getRepository()->find($id);
        if($entity->status === StatusEnum::ACTIVE)
            return false;
        
        $entity->status = StatusEnum::ACTIVE;
        return $entity->save();
    }

    public function block($id)
    {
        $entity = $this->getRepository()->find($id);
        if($entity->status === StatusEnum::BLOCKED)
            return false;
        
        $entity->status = StatusEnum::BLOCKED;
        return $entity->save();
    }   
}