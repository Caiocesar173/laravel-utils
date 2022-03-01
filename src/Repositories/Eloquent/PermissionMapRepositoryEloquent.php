<?php

namespace Caiocesar173\Utils\Repositories\Eloquent;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Criteria\RequestCriteria;

use Caiocesar173\Utils\Entities\PermissionMap;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;

use Caiocesar173\Utils\Entities\Permission;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;


/**
 * Class PermissionMapRepositoryEloquent.
 *
 * @package namespace Caiocesar173\Utils\Repositories\Eloquent;
 */
class PermissionMapRepositoryEloquent extends RepositoryAbstract implements PermissionMapRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PermissionMap::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function UserhasItem(User $user, PermissionItem $route, String $routeUrl, $type = PermissionItemTypeEnum::ROUTE)
    {       
       $group = $this->getUserGroup($user);
        if(is_string($group)) 
            return $group;

        if($group instanceof Permission)
            return $this->hasItem($route, $group, $type);
       
        return "O usuario não tem permissão à rota '{$routeUrl}'.";
    }

    public function getUserGroup(User $user)
    {
        $map = app($this->model())
            ->where('responsable_type', get_class($user))
            ->where('responsable_id', $user->id)
            ->first();
    
        if(is_null($map)) 
            return "Usuario não cadastrado em grupo de permissão valido";

        if($map->permission_type == get_class(app(Permission::class)) )
            return app(Permission::class)->find($map->permission_id);

        return "Não foi possivel localizar um grupo de permissões para o Usuario";
    }

    public function hasGroup(Model $item, Model $group)
    {
        $map = app($this->model())
            ->where('responsable_type', get_class($item))
            ->where('responsable_id', $item->id)
            ->where('permission_type', get_class($group))
            ->where('permission_id', $group->id)
            ->first();
        
        return $map;
    }

    public function hasItem(Model $item, Model $group)
    {
        $map = app($this->model())
            ->where('responsable_type', get_class($group))
            ->where('responsable_id', $group->id)
            ->where('permission_type', get_class($item))
            ->where('permission_id', $item->id)
            ->first();
        
        return $map;
    }

    public function groupItems( Permission $group )
    {
        $items = app($this->model())
            ->where('responsable_type', get_class($group))
            ->where('responsable_id', $group->id)
            ->get();
        
        return $items;
    }
}
