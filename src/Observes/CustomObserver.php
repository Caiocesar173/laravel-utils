<?php

namespace Caiocesar173\Utils\Observes;

abstract class CustomObserver
{
    protected function clearCacheTags($tags)
    {
        \Cache::tags($tags)->flush();
    }

    protected function clearCacheSections($section)
    {
        \Cache::section($section)->flush();
    } 
}