<?php

namespace Caiocesar173\Utils\Abstracts;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * This varible controls the ability to return an api response or a model for a view
     */
    public $returnModel;

    public function __construct(Request $request)
    {
        $this->returnModel = !$request->is('api/*');
    }
}
