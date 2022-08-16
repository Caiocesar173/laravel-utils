<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Images extends ModelAbstract
{
    protected $table = 'images';
    protected $primaryKey = 'id';

    protected $fillable = [
        'responsable_id',
        'responsable_type',
        'base64',
        'name',
        'size',
        'type',
        'status',
    ];

    protected $casts = [
        'base64' => 'array'
    ];

    public function responsable()
    {
        return $this->morphTo();
    }
}
