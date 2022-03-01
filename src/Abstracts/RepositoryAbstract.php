<?php
namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Classes\Json;
use Caiocesar173\Utils\Abstracts\ModelAbstract;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CriteriaInterface;


abstract class RepositoryAbstract extends BaseRepository 
{
    protected $skipCriteria = false;

    public function update(array $attributes, $id)
    {
        $model = parent::makeModel();

        $attribute = self::getAttributes($model, $attributes);

        if (method_exists($model, 'getValuesUpdate'))
            $attribute = $model->getValuesUpdate($attribute, $id);

        return $model->edit($attribute, $id);
    }

    public function create(array $attributes)
    {
        $model = parent::makeModel();
        $modelNew = $model->create($attributes);

        foreach ($attributes as $key => $attribute) 
        {
            if(!Json::isJson($attribute))
                continue;

            $list               = json_decode($attribute, true);
            $strModelRelation   = str_replace('_', ' ', $key);
            $strRelationClasse  = str_replace(' ', '', ucwords($strModelRelation));
            $strRelationMethod  = lcfirst($strRelationClasse);
            $strRelationClasse  = rtrim($strRelationClasse, 's');
            $modelRelation      = app("App\\Entities\\{$strRelationClasse}");

            self::saveRelation($modelNew, $modelRelation, $strRelationMethod, $list);
        }

        return $modelNew;
    }

    public function pluck($colum = '', $name = null, $filter = null, $operator = '', $id = 'id')
    {
        $colums = explode(',', $colum);

        $model = parent::makeModel();
        $table = $model->getTable();

        if( $id == '')
            $$id = 'id';

        $query = $model->orderBy($colums[0], 'asc');

        if (!is_null($name)) :

            switch ($operator) {
                case 'in':
                    $query->whereIn("{$table}.{$filter}", explode("," , $name));
                    break;
                
                default:

                    $operator = $operator == 'like' ? 'like' : '=';
                    $name = $operator == 'like' ? "%{$name}%" : $name;
        
                    if (!is_null($filter))
                        $query->where("{$table}.{$filter}", $operator, $name);
        
                    $query->orWhere(
                        function($query) use ($colums, $operator, $name) 
                        {
                            foreach ($colums as $colum) 
                                $query->orWhere($colum, $operator, $name);
                        }
                    );

                    break;
            }
     
        endif;
        $query = $this->applyCriteriModelAbstract($query);

        if (count($colums) > 1)
            return $query->pluckMultiple($id, $colums);

        return $query->pluck($colum, $id);
    }

    protected function applyCriteriaModelAbstract($model)
    {
        if (self::$skipCriteria === true) 
            return $model;

        $criteria = parent::getCriteria();

        if ($criteria) 
        {
            foreach ($criteria as $c) 
            {
                if ($c instanceof CriteriaInterface)
                    $model = $c->apply($model, $this);
            }
        }

        return $model;
    }

    protected static function getAttributes(ModelAbstract $model, array $attributes): array
    {
        if (!empty($attributes['__validador__'])) 
        {
            $classe = explode('::', $attributes['__validador__'])[0];
            $metod = explode('::', $attributes['__validador__'])[1];

            unset($attributes['__validador__']);

            return $attributes;
        }

        return $attributes;
    }

    protected static function saveRelation(ModelAbstract $model, ModelAbstract $relation, string $Method, array $list)
    {
        $listProduct = [];
        foreach ($list as $dataModelRelation) 
        {
            if (method_exists($relation, 'getValuesUpdate'))
                $dataModelRelation = $relation::getValuesCreate($dataModelRelation);
            
            array_push($listProduct, new $relation($dataModelRelation));
        }

        $model->{$Method}()->saveMany($listProduct);
    }
}
