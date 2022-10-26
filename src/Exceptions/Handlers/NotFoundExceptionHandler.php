<?php

namespace Caiocesar173\Utils\Exceptions\Handlers;

use Throwable;
use Caiocesar173\Utils\Exceptions\NotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class NotFoundExceptionHandler extends ExceptionHandler
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

            $models = explode('\\', $exception->getModel());
            $entityName = array_pop($models);
            $id = implode(',', $exception->getIds());

            if($request->isJson())
                throw new NotFoundException($id, $entityName);

            return abort(404, "O registro com o código <b>{$id}</b> do tipo <b>{$entityName}</b> não foi localizado");
        }

        return parent::render($request, $exception);
    }
}
