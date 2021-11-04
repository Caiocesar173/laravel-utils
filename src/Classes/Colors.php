<?php

namespace  Caiocesar173\Utils\Classes;

class Colors
{
    private static $cores = null;

    public static function lists()
    {
        return [
            '#4dc9f6',
            '#f67019',
            '#f53794',
            '#537bc4',
            '#acc236',
            '#166a8f',
            '#00a950',
            '#58595b',
            '#458EF5',
            '#F576C5',
            '#5D9CF5',
            '#F5B945',
            '#5FF551',
            '#B540F5',
            '#F5A571',
            '#D0F540',
            '#4CEDF5',
            '#F54075',
            '#F5D171',
            '#F55886',
            '#68F579',
            '#4C75F5',
        ];
    }

    public static function next()
    {
        if( is_null(self::$cores) )
            self::$cores = self::lists();

        return next(self::$cores);
    }

    public static function reset()
    {
        if( is_null(self::$cores) )
            self::$cores = self::lists();

        reset(self::$cores);
    }
}
