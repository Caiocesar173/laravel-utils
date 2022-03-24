<?php

namespace Caiocesar173\Utils\Abstracts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;

abstract class ApiControllerAbstract extends Controller
{
    abstract protected function getService(): ServiceAbstract;

    public function __construct(Request $request)
    {
        $this->validateRequest($request);
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
        $perPage = $request->get('per_page', 6);
        $page = $request->get('page', 1);
        $idenifier = request()->get('identifier', 'id');
        $operator = request()->get('operator', 'where');
        $orderBy = request()->get('order_by', 'asc');

        if ($orderBy != 'asc' && $orderBy != 'desc')
            $orderBy = 'asc';

        $querry = [];
        $repository_fields = $this->getService()->getRepository()->getModel()->getFillable();
        foreach (array_keys($request->all()) as $field) {
            if (array_key_exists($field, array_flip($repository_fields)))
                $querry[$field] = $request[$field];
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

        return $this->getService()->datatable($repository, ['*'], $perPage, $page);
    }

    /**
     * search
     * 
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function show($id)
    {
        $idenifier = request()->get('idenifier', 'id');

        $entity = $this->getService()->getRepository()->getModel();
        $entity = class_basename($entity);
        $entity = strtolower($entity);

        try {
            $data = $this->getService()->getRepository()->where($idenifier, $id)->get();

            if (is_null($data))
                return ApiReturn::ErrorMessage("O registro do tipo {$entity} com o {$idenifier} {$id} nao foi localizado", 404);

            return ApiReturn::SuccessMessage("$entity", 200, $data);
        } catch (\Exception $e) {
            return ApiReturn::ErrorMessage("O registro do tipo {$entity} com o {$idenifier} {$id} nao foi localizado", 404);
        }
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
        $delete = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.delete', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($delete))
            return ApiReturn::ErrorMessage($delete, 403);

        $save = $this->getService()->destroy($id);

        if (is_string($save))
            return ApiReturn::ErrorMessage($save, 400);

        if ($save)
            return ApiReturn::SuccessMessage('Informações excluidas com sucesso', 200);

        return ApiReturn::ErrorMessage('Não foi possivel excluir as informações', 400);
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
     * recover
     *
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function recover($id)
    {
        $updateDeleted = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.deleted.update', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($updateDeleted))
            return ApiReturn::ErrorMessage($updateDeleted, 403);

        $save = $this->getService()->recover($id);
        if ($save)
            return ApiReturn::SuccessMessage('Informações restauradas com sucesso', 200);

        return ApiReturn::ErrorMessage('Não foi possivel restaurar as informações', 400);
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
        $block = app(PermissionMapRepository::class)
            ->UserhasItem(auth()->user(), 'status.block', 'item', '', PermissionItemTypeEnum::ITEM);

        if (is_string($block))
            return ApiReturn::ErrorMessage($block, 403);

        $save = $this->getService()->block($id);
        if ($save)
            return ApiReturn::SuccessMessage('Informações bloqueadas com sucesso', 200);

        return ApiReturn::ErrorMessage('Não foi possivel bloqueadar as informações', 400);
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
        return $this->getService()->getRequest()->validate($rules, $request->all());
    }
}
