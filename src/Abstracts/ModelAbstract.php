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

    public static function edit($data, $identifier = null, $findBy = 'id')
    {
        DB::beginTransaction();
        try {
            $model = self::where($findBy, $identifier)->first();
            if (is_null($model)) 
                return "unable to find any results, searching: ($findBy = $identifier)";

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

    public static function destroy($identifier = null, $findBy = 'id')
    {
        DB::beginTransaction();
        try {
            $model = self::where($findBy, $identifier)->first();
            if (is_null($model))
                return "unable to find any results, searching: ($findBy = $identifier)";

            $model->status_id = StatusEnum::EXCLUDED;

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

    public function preSave(array $attributes): array
    {
        return $attributes;
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

    /**
     * Scope a query to Pluck The Multiple Columns
     *
     * This is Used to Pluck the multiple Columns in the table based
     * on the existing query builder instance
     *
     * @author Manojkiran.A <manojkiran10031998@gmail.com>
     * @version 0.0.2
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param string $keyColumn the columns Which is used to set the key of array
     * @param array $extraFileds the list of columns that need to plucked in the table
     * @return \Illuminate\Support\Collection
     * @throws Illuminate\Database\QueryException
     **/
    public function scopePluckMultiple($query, string $keyColumn, array $extraFileds): \Illuminate\Support\Collection
    {
        //pluck all the id based on the query builder instance class
        $keyColumnPluck = $query->pluck($keyColumn)->toArray();

        //start @deprecated because slower than foreach

        //anonymous callback method to iterate over the each fileds of table

        // $callBcakMethod = function ($eachValue) use ($query) {
        //     $eachQuery[$eachValue] = $query->pluck($eachValue)->toArray();
        //     return $eachQuery;
        // };
        //now we are collapsing the array single time to get the propered array

        // $extraFields = Arr::collapse(array_map($callBcakMethod, $extraFileds));

        //end @deprecated because slower than foreach

        //iterating Through All Other Fileds and Plucking it each Time
        foreach ((array)$extraFileds as  $eachFiled)
            $extraFields[$eachFiled] =   $query->pluck($eachFiled)->toArray();

        //now we are done with plucking the Required Columns
        //we need to map all the values to each key

        //get all the keys of extra fileds and sets as array key or index
        $arrayKeys = array_keys($extraFields);
        //get all the extra fileds array and mapping it to eack key
        $arrayValues = array_map(
            function ($value) use ($arrayKeys) {
                return array_combine($arrayKeys, $value);
            },
            call_user_func_array('array_map', array_merge(
                array(function () {
                    return func_get_args();
                }),
                $extraFields
            ))
        );
        //now we are done with the array now Convert it to Collection
        return new \Illuminate\Support\Collection(array_combine($keyColumnPluck, $arrayValues));
    }

    public function isDestroyed()
    {
        return $this->status == StatusEnum::EXCLUDED;
    }
}
