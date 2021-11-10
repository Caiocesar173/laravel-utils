<?php
namespace Caiocesar173\Utils\Observes;

use \Cache;
use Caiocesar173\Utils\Http\Model\CustomModel;

/**
 * @package Caiocesar173\Utils\Http\Model\CustomModel
 * @method void saving(CustomModel $model) Antes de salvar
 * @method void created(CustomModel $model) Depois de salvar
 * @method void deleting(CustomModel $model) Antes de deletar
 * @method void deleted(CustomModel $model) Depois de deletar
 */
abstract class CustomObserver
{
    protected function clearCacheTags($tags)
    {
        Cache::tags($tags)->flush();
    }

    protected function clearCacheSections($section)
    {
        Cache::section($section)->flush();
    } 
}