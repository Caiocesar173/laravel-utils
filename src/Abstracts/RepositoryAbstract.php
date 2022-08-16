<?php

namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;

use Caiocesar173\Utils\Exceptions\ApiException;
use Caiocesar173\Utils\Exceptions\BlockedException;
use Caiocesar173\Utils\Exceptions\InactiveException;
use Caiocesar173\Utils\Exceptions\NotFoundException;
use Caiocesar173\Utils\Exceptions\NotDeletableException;
use Caiocesar173\Utils\Exceptions\NotRecoverableException;
use Caiocesar173\Utils\Exceptions\NotInactivatableException;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Exceptions\RepositoryException;

abstract class RepositoryAbstract extends BaseRepository
{
    protected $skipCriteria = false;

    private function setActive($model)
    {
        $model->status = StatusEnum::ACTIVE;
        return $model->save();
    }

    public function create(array $attributes)
    {
        return $this->makeModel()->create($attributes);
    }

    //Update Functions
    public function edit(array $attributes, Model $model)
    {
        $this->Updatable($model);
        return $this->makeModel()->edit($attributes, $model);
    }

    public function Updatable(Model $model): bool
    {
        $permissionRepository = app(PermissionMapRepository::class);

        if ($model->isBlocked) {
            if ($permissionRepository->UserhasItem(auth()->user(), 'status.blocked.update', 'item', '', PermissionItemTypeEnum::ITEM))
                return true;
            else
                throw new BlockedException($model->id, $model->entityName);
        }

        if ($model->isInactive) {
            if ($permissionRepository->UserhasItem(auth()->user(), 'status.inactivated.update', 'item', '', PermissionItemTypeEnum::ITEM))
                return true;
            else
                throw new InactiveException($model->id, $model->entityName);
        }

        return true;
    }

    //Delete Functions
    public function exclude(Model $model)
    {
        if ($this->Excludable($model))
            return $this->makeModel()->exclude($model);

        return false;
    }

    public function Excludable(Model $model): bool
    {
        if ($model->isDestroyed)
            throw new NotFoundException($model->id, $model->entityName);

        if (!$model->isDestroyed) {
            if (app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.delete', 'item', '', PermissionItemTypeEnum::ITEM))
                return true;
            else
                throw new NotDeletableException($model->id, $model->entityName);
        }

        return false;
    }

    //Recover Functions
    public function recover(Model $model)
    {
        if ($this->Recoverable($model))
            return $this->setActive($model);

        return false;
    }

    public function Recoverable(Model $model): bool
    {
        if ($model->isActive)
            throw new ApiException("O recuso não pode ser restaurado pois o mesmo não se encontra ativo!");

        if ($model->isDestroyed) {
            if (app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.recover', 'item', '', PermissionItemTypeEnum::ITEM))
                return true;
            else
                throw new NotRecoverableException($model->id, $model->entityName);
        }

        return false;
    }

    //Inactivate Functions
    public function inactivate(Model $model)
    {
        if ($this->Inactivatable($model))
        {
            $model->status = StatusEnum::INACTIVE;
            return $model->save();
        }

        return false;
    }

    public function Inactivatable(Model $model): bool
    {
        if ($model->isActive) {
            if (app(PermissionMapRepository::class)->UserhasItem(auth()->user(), 'status.inactive', 'item', '', PermissionItemTypeEnum::ITEM))
                return true;
            else
                throw new NotInactivatableException($model->id, $model->entityName);
        }

        return false;
    }

    /**
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->model();
        $model = new $model();

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }

    protected function applyCriteriaModelAbstract($model)
    {
        if (self::$skipCriteria)
            return $model;

        $criteria = parent::getCriteria();

        if ($criteria) {
            foreach ($criteria as $c) {
                if ($c instanceof CriteriaInterface)
                    $model = $c->apply($model, $this);
            }
        }

        return $model;
    }

    protected static function saveRelation(Model $model, Model $relation, string $Method, array $list)
    {
        $listProduct = [];
        foreach ($list as $dataModelRelation) {
            if (method_exists($relation, 'getValuesUpdate'))
                $dataModelRelation = $relation::getValuesCreate($dataModelRelation);

            array_push($listProduct, new $relation($dataModelRelation));
        }

        $model->{$Method}()->saveMany($listProduct);
    }
}
