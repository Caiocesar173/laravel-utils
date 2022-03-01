<?php

namespace Caiocesar173\Utils\Abstracts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Abstracts\ServiceAbstract;


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
        $perPage = $request->per_page != null ? $request->per_page : 6;
        $request->request->remove('per_page');

        $repository_fields = $this->getService()->getRepository()->getModel()->getFillable();
        foreach( array_keys($request->all()) as $field )
        {   
            if( !array_key_exists( $field, array_flip($repository_fields) ))
                $request->request->remove($field);
        }

        $querry = !empty($request->all()) ? $request->all() : null;

        return $this->getService()->datatable($querry, $perPage);
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
        }
        catch(\Exception $e) {
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
        $save = $this->getService()->destroy($id);
        return ApiReturn::SuccessMessage('Informações excluidas com sucesso', 200);
    }

    /**
     * recover
     *
     * @param  ABaseRepository $repository
     * @param  string $id
     * 
     * @return Illuminate\Support\Facades\Response
     */
    public function recover($id)
    {
        $save = $this->getService()->recover($id);
        return ApiReturn::SuccessMessage('Informações restauradas com sucesso', 200);
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
