<?php

namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;
use Caiocesar173\Utils\Exceptions\Handlers\NotFoundExceptionHandler;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Debug\ExceptionHandler;

use App\Http\Controllers\Controller;

abstract class ApiControllerAbstract extends Controller
{
    abstract protected function getService(): ServiceAbstract;

    public function __construct(Request $request)
    {
        App::singleton(
            ExceptionHandler::class,
            NotFoundExceptionHandler::class
        );

        $this->validateRequest($request);
    }

    /** 
     * search
     *
     * @param  array $data
     * @param  string $idenifier
     * @param  string $operator
     * @param  string $orderBy
     * 
     * 
     * @return Caiocesar173\Utils\Abstracts\RepositoryAbstract
     */
    private function search(array $data, $idenifier, $operator, $orderBy): RepositoryAbstract
    {
        if ($orderBy != 'asc' && $orderBy != 'desc')
            $orderBy = 'asc';

        $querry = [];
        $repository_fields = $this->getService()->getRepository()->getModel()->getFillable();
        foreach (array_keys($data) as $field) {
            if (array_key_exists($field, array_flip($repository_fields)))
                $querry[$field] = $data[$field];
        }
        $querry = !empty($querry) ? $querry : null;
        $repository = $this->getService()->getRepository()->orderBy($idenifier, $orderBy);

        switch ($operator) {
            case 'in':
                $repository->whereIn($querry);
                break;
            case 'like':
                $searchBy = request()->get('search_value');
                if (!$searchBy)
                    return ApiReturn::ErrorMessage('O parametro search_by é requerido em buscas com tipo: LIKE', 400);

                $repository->where($idenifier, 'like', '%' . $searchBy . '%');
                break;
            default:
                $repository->where($querry);
        }

        return $repository;
    }

    /**
     * index
     *
     * @param  Request $request
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function index(Request $request)
    {
        $idenifier = request()->get('identifier', 'id');
        $operator = request()->get('operator', 'where');
        $orderBy = request()->get('order_by', 'asc');

        $perPage = $request->get('per_page', 6);
        $page = $request->get('page', 1);

        $data = $this->search($request->all(), $idenifier, $operator, $orderBy);

        if ($data->all()->isEmpty())
            return ApiReturn::ErrorMessage("Não foram encontrados recursos", 404);

        return $this->getService()->datatable($data, ['*'], $perPage, $page);
    }

    /**
     * show id
     * 
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function show($id)
    {
        $entity = $this->getService()->entityName;
        $data = $this->getService()->find($id);
        return ApiReturn::SuccessMessage("$entity", 200, $data);
    }

    /**
     * store
     *
     * @param  Request $request
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function store(Request $request)
    {
        $save = $this->getService()->create($request->all());
        return ApiReturn::SuccessMessage('Criado com sucesso', 200, $save);
    }

    /**
     * update
     *
     * @param  Request $request
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function update(Request $request, $id)
    {
        $save = $this->getService()->update($request, $id);
        return ApiReturn::SuccessMessage('Informações atualizadas com sucesso', 200, $save);
    }

    /**
     * destroy
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function destroy($id)
    {
        $this->getService()->destroy($id);
        return ApiReturn::SuccessMessage('Informações excluidas com sucesso', 200);
    }

    /**
     * recover
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function recover($id)
    {
        if ($this->getService()->recover($id))
            return ApiReturn::SuccessMessage('Informações restauradas com sucesso', 200);

        return ApiReturn::ErrorMessage('Informações não puderam ser restauradas', 400);
    }

    /**
     * inactivate
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function inactivate($id)
    {
        if ($this->getService()->recover($id))
            return ApiReturn::SuccessMessage('Informações desativadas com sucesso', 200);

        return ApiReturn::ErrorMessage('Informações não puderam ser desativadas', 400);
    }


    /**
     * activate
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function activate($id)
    {
        $entity = $this->find($id);
        if ($entity->isInactive)
            return $this->setActive($entity);

        return false;
    }

    /**
     * block
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function block($id)
    {
        $this->getService()->block($id);
        return ApiReturn::SuccessMessage('Informações bloqueadas com sucesso', 200);
    }

    /**
     * unblock
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function unblock($id)
    {
        $updateBlocked = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.blocked.update', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($updateBlocked))
            return ApiReturn::ErrorMessage($updateBlocked, 403);

        $save = $this->getService()->unblock($id);
        if ($save)
            return ApiReturn::SuccessMessage('Informações desbloqueadas com sucesso', 200);

        return ApiReturn::ErrorMessage('Não foi possivel desbloqueadar as informações', 400);
    }

    /**
     * audit
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function audit($id)
    {
        $audit = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'audit', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($audit))
            return ApiReturn::ErrorMessage($audit, 403);

        $entity = $this->getService()->getRepository()->getModel();
        $entity = class_basename($entity);
        $entity = strtolower($entity);

        $timeline = $this->getService()->audit($id);
        return ApiReturn::SuccessMessage("auditing $entity", 200, $timeline);
    }

    /**
     * validateRequest
     *
     * @param  Request $request
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    protected function validateRequest(Request $request)
    {
        $rules = $this->getService()->getRequest()->rules();
        $validate = $this->getService()->getRequest()->validate($rules, $request->all());
    }
}
