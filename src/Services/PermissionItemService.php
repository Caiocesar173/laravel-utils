<?php

namespace Caiocesar173\Utils\Services;

use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Http\Requests\PermissionItemRequest;
use Caiocesar173\Utils\Repositories\PermissionItemRepository;


class PermissionItemService extends ServiceAbstract
{
    public function getRepository(): RepositoryAbstract
    {
        return app(PermissionItemRepository::class);
    }

    public function getRequest(): FormRequestAbstract
    {
        return app(PermissionItemRequest::class);
    }

    public function create($item)
    {
        $items = [];

        if(is_array($item))
        {
            foreach($item as $element)
            {   
                if(!is_array($element))
                    $element = (array) $element;

                $item = $this->getRepository()->where('code', $element['code'])->first();
                if( is_null($item) )
                    $item = $this->getRepository()->create((array)$element);
                else
                    $item = $this->getRepository()->update((array)$element, $item->id);

                array_push($items, $item);
            }
            return $items;
        }

        $created = $this->getRepository()->create((array)$item);
        array_push($items, $created);
        
        return $items;
    }
}