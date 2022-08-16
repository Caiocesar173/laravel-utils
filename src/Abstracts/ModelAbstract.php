<?php
namespace Caiocesar173\Utils\Abstracts;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use CaioCesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Traits\UuidKeyTrait;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

abstract class ModelAbstract extends Model implements Transformable, AuditableContract
{
    use TransformableTrait, UuidKeyTrait, HasFactory, Auditable;

    protected $auditHide = [];
    protected $auditTranslate = [];
    protected $auditTranslateValue = [];

    public static function edit($data, ModelAbstract $model)
    {
        DB::beginTransaction();
        try {
            if ($model->update( $data )) 
            {
                DB::commit();
                return $model;
            }
            DB::rollback();
            return 'unable to save';
            
        } catch (\Exception $e) {
            DB::rollback();
            return 'ops, something went wrong...';
        }
    }

    public static function exclude(ModelAbstract $model)
    {
        DB::beginTransaction();
        try {
            $model->status = StatusEnum::EXCLUDED;
            if ( $model->save() ) 
            {
                DB::commit();
                return true;
            }
            DB::rollback();
            return 'unable to save';
            
        } catch (\Exception $e) {
            DB::rollback();
            return 'ops, something went wrong...';
        }
    }
    
    public function getEntityNameAttribute()
    {
        $entity = class_basename($this);
        $entity = strtolower($entity);
        return $entity;
    }   

    public function getEntityStatusAttribute()
    {
        return $this->status;
    }

    public function getIsActiveAttribute()
    {
        return $this->status == StatusEnum::ACTIVE;
    }

    public function getIsDestroyedAttribute()
    {
        return $this->status == StatusEnum::EXCLUDED;
    }

    public function getIsBlockedAttribute()
    {
        return $this->status == StatusEnum::BLOCKED;
    }

    public function getIsInactiveAttribute()
    {
        return $this->status == StatusEnum::INACTIVE;
    }

    public function getValueModel($field, $default = '')
    {
        $list = explode('.', $field);
        $model = clone $this;

        foreach ($list as $position) 
        {
            $value = $model->{$position} ?? $default;
            $method = str_replace(' ', '', lcfirst(ucwords('form ' . str_replace('_', ' ', $position) . ' Attribute')));

            if (method_exists($model, $method)) 
            {
                $model = $model->{$method}($value);
                continue;
            }

            $model = $value;
        }

        return $model ?? $default;
    }

    protected static function getRepository()
    {
        $class = str_replace('Entities', 'Repositories', get_called_class());
        return app($class . 'Repository');
    }

    protected function hasManyRepository($class, $foreignKey = null, $localKey = null)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->hasMany($class, $foreignKey, $localKey), $reposirory);
    }

    protected function hasOneRepository($class)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->hasOne($class), $reposirory);
    }

    protected function morphManyRepository($related, $name, $type = null, $id = null, $localKey = null)
    {
        $reposirory = $related::getRepository();
        return $this->relationshipRepository($this->morphMany($related, $name, $type, $id, $localKey), $reposirory);
    }

    protected function belongsToRepository($class)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->belongsTo($class), $reposirory);
    }

    private function relationshipRepository(Relation $relation, RepositoryAbstract $reposirory)
    {
        foreach ($reposirory->getCriteria() as $criteria)
        {
            $filter = app(get_class($criteria));
            $relation = $filter->apply($relation, $reposirory);
        }

        return $relation;
    }
}
