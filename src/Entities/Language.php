<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Language extends ModelAbstract
{
    protected $table = 'language';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'name',
        'nativeName'
    ];
}
