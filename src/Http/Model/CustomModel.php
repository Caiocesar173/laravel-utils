<?php
namespace Caiocesar173\Utils\Http\Model;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

use Illuminate\Support\Facades\DB;

use CaioCesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;
use Caiocesar173\Utils\Traits\UuidKeyTrait;

abstract class CustomModel extends Model implements Transformable, AuditableContract
{
    use TransformableTrait, UuidKeyTrait, Auditable;

    public static function create(Array $data)
    {
        DB::beginTransaction();
        try {
            $model = self::firstOrNew($data);
            if ($model->save()) 
            {
                DB::commit();
                return $model;
            }
            DB::rollback();
            return 'unable to save';
            
        } catch (\Exception $e) {
            DB::rollback();
            return "ops, something went wrong... [$e]";
        }
    }

    public static function list($identifier = null, $findBy = 'id')
    {
        if ( !is_null($identifier) )
            $model = self::where($findBy, $identifier)->first();
        else
            $model = self::all();

        return $model;
    }

    public static function edit($data, $identifier = null, $findBy = 'id')
    {
        DB::beginTransaction();
        try {
            $model = self::where($findBy, $identifier)->first();
            if (is_null($model)) 
                return "unable to find any results, searching: ($findBy = $identifier)";

            if ($model->save()) 
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

    public static function destroy($identifier = null, $findBy = 'id')
    {
        DB::beginTransaction();
        try {
            $model = self::where($findBy, $identifier)->first();
            if (is_null($model))
                return "unable to find any results, searching: ($findBy = $identifier)";

            $model->status_id = StatusEnum::Excluded;

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

    protected static function getRepository()
    {
        $classe = str_replace('Entities', 'Repositories', get_called_class() );
        return app($classe.'Repository');
    }

    protected function HasManyRepository($classe)
    {
        $repository = $classe::getRepository();

        return $this->relationshipRepository($this->hasMany($classe), $repository);
    }

    private function RelationshipRepository(Relation $relation, CustomBaseRepository $repository)
    {
        foreach ( $repository->getCriteria() as $criteria) :
            $filter = app(get_class($criteria));
            $relation = $filter->apply($relation, $repository);
        endforeach;

        return $relation;
    }

    public function ScopePluckMultiple($query, string $keyColumn, array $extraFileds): Collection
    {
        $keyColumnPluck = $query->pluck($keyColumn)->toArray();

        foreach ((array)$extraFileds as  $eachFiled) 
        {
            $extraFields[$eachFiled] =   $query->pluck($eachFiled)->toArray();
        }

        $arrayKeys = array_keys($extraFields);
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

        return new Collection(array_combine($keyColumnPluck, $arrayValues));
    }
}
