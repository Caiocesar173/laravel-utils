<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\ImagesFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\Factory;

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

    /**
     * Get the responsable for the image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function responsable(): MorphTo
    {
        return $this->morphTo('responsable', 'responsable_type', 'responsable_id', 'id');
    }

    protected static function newFactory(): Factory
    {
        return ImagesFactory::new();
    }
}
