<?php

namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;

abstract class ServiceAbstract
{
    abstract public function getRepository(): RepositoryAbstract;
    abstract public function getRequest(): FormRequestAbstract;

    public $entityName;

    public function __construct()
    {
        $model = $this->getRepository()->model();
        $model = new $model();

        $this->entityName = $model->entityName;
    }

    private function setActive($entity)
    {
        $entity->status = StatusEnum::ACTIVE;
        return $entity->save();
    }

    public function create($request)
    {
        return $this->getRepository()->create($request);
    }

    public function datatable(RepositoryAbstract $model, $columns, $perPage, $page)
    {
        return $model->paginate($perPage, $columns, "paginate", $page);
    }

    public function find($id)
    {
        return $this->getRepository()->find($id);
    }

    public function update($request, $id)
    {
        $model = $this->find($id);
        return $this->getRepository()->edit($request->all(), $model);
    }

    //Delete
    public function destroy($id)
    {
        $entity = $this->find($id);
        $this->getRepository()->exclude($entity);
    }

    public function recover($id)
    {
        $model = $this->find($id);
        return $this->getRepository()->recover($model);
    }

    //Inactivate
    public function inactivate($id)
    {
        $model = $this->find($id);
        return $this->getRepository()->inactivate($model);
    }

    public function activate($id)
    {
        $entity = $this->find($id);
        if ($entity->isInactive)
            return $this->setActive($entity);

        return false;
    }

    //Block
    public function unblock($id)
    {
        $entity = $this->find($id);
        if ($entity->isBlocked)
            return $this->setActive($entity);

        return false;
    }

    public function block($id)
    {
        $entity = $this->find($id);
        if ($entity->isBlocked)
            return false;

        $entity->status = StatusEnum::BLOCKED;
        return $entity->save();
    }

    //Audit
    public function audit($id)
    {
        $entity = $this->find($id);
        return $entity->audits;
    }
}
