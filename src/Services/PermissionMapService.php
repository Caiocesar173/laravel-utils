<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Entities\Permission;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Http\Requests\PermissionMapRequest;

use Caiocesar173\Utils\Repositories\PermissionRepository;
use Caiocesar173\Utils\Repositories\PermissionItemRepository;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;
use Illuminate\Database\Eloquent\Model;


class PermissionMapService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(PermissionMapRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(PermissionMapRequest::class);
    }

    /**
     * Associate a Responsable to Permisison Item.
     * When registering an item use its code. 
     * While registering the group use the group name
     * 
     * $groups represent the reponsble/owner of the permission
     * $item represent the permisison given to the responsable. My be of any type
     * 
     * $items my be single or an array of items just linke groups.
     * 
     * @param  $items
     * @param  $groups
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function associate( $items, $groups )
    {
        $map = [];
        $results = [];

        if(is_array($items))
        {
            foreach($items as $item)
            {   
                $itemName = $item;
                if(! $item instanceof PermissionItem)
                {
                    $item = app(PermissionItemRepository::class)->where('code', $item)->first();
                    
                    if(is_null($item))
                        return "Não foi possivel localizar o item de permissão: $itemName";
                }
                
                
                if(is_array($groups))
                {
                    foreach($groups as $group)
                    {   
                        $groupName = $group;
                        if(!$group instanceof Permission)
                        {
                            $group = app(PermissionRepository::class)->where('name', $group)->first();
                        
                            if(is_null($group))
                                return "Não foi possivel localizar a permissão: $groupName";
                        }
                        $save =  $this->associateModel($group, $item);

                        array_push($results, [
                            "item" => "$item->code",
                            "group" =>  "$group->name",
                            "result" => $save ? 'saved' : $save
                        ]);
                    }
                }
                else
                {
                    $groupName = $groups;
                    if($groups instanceof Permission)
                        $group = app(PermissionRepository::class)->where('name', $groups)->first();
            
                    if(is_null($group))
                        return "Não foi possivel localizar a permissão: $groupName";

                    $map['responsable_id']   = $group->id;
                    $map['responsable_type'] = get_class($group);


                    $save =  $this->associateModel($group, $item);

                    return [
                        "item" => "$item->code",
                        "group" =>  "$group->name",
                        "result" =>  $save ? 'saved' : $save,
                    ];
                }
            }
            return $results;
        }
        
        return $this->associateModel($groups, $items);
    }

    public function associateModel( Model $group, Model $item )
    {
        $map = [];

        $map['responsable_id']   = $group->id;
        $map['responsable_type'] = get_class($group);

        $map['permission_id']   = $item->id;
        $map['permission_type'] = get_class($item);

        return $this->getRepository()->create($map);
    }
}