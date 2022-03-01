<?php

namespace Caiocesar173\Utils\Exceptions;

use Throwable;
use Caiocesar173\Utils\Classes\ApiReturn;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;


class NotFoundException extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Throwable $exception)
    {   
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            
            $models = explode('\\',$exception->getModel()) ;
            $entidade = array_pop($models);
            $id = implode(',', $exception->getIds() );
            
            return ApiReturn::ErrorMessage("O registro com o código {$id} do tipo {$entidade} não foi localizado", 404);
        }

        return parent::render($request, $exception);
    }
}
