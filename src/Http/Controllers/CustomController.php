<?php

namespace Caiocesar173\Utils\Http\Controllers;

use Illuminate\Http\Request;
use Prettus\Validator\Exceptions\ValidatorException;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Repositories\Eloquent\CustomBaseRepository;


abstract class CustomController extends Controller
{
    protected static function isJson()
    {
        return (request()->wantsJson() || request()->is('api/*'));
    }

    protected static function PluckRepository(CustomBaseRepository $repository)
    {
        $id = request()->get('i', 'id');
        $query = request()->get('q', '');
        $filter = request()->get('f', null);
        $colum = request()->get('c', '');
        $operator = request()->get('o', 'like');

        $array = $repository->pluck($colum, $query, $filter, $operator, $id)->toArray();

        return self::PluckToJson($array);
    }

    protected static function PluckToJson(array $array)
    {
        $data = [];

        array_walk(
            $array,
            function ($value, $key) use (&$data) {

                $value = is_array($value) ? implode(' - ', $value) : $value;
                array_push($data, [
                    'id' => $key,
                    'text' => $value
                ]);
            }
        );
        $data = [
            'data' => $data
        ];

        return ApiReturn::SuccessMessage('Success', 200, $data);
    }

    protected static function StoreRepositoty(CustomBaseRepository $repository, Request $request, &$entity = null)
    {
        try {
            $entity = $repository->create($request->all());

            return ApiReturn::SuccessMessage('Criado com sucesso', 200, $entity->toArray());

        } catch (ValidatorException $e) {
            return ApiReturn::ErrorMessage($e->getMessageBag(), 400);
        }
    }

    /**
     * updateRepository
     *
     * @param  CustomBaseRepository $repository
     * @param  Request $request
     * @param  string $id
     * @return ApiReturn Response
     */
    protected static function UpdateRepository(CustomBaseRepository $repository, Request $request, $id)
    {
        try {
            $entity = $repository->update($request->all(), $id);

            return ApiReturn::SuccessMessage('Informações atualizadas com sucesso', 200, $entity->toArray());

        } catch (ValidatorException $e) {
            return ApiReturn::ErrorMessage($e->getMessageBag(), 400);
        }
    }

    protected static function ToListChart($title, $labels, $datasetsData, $datasetsColors, $backgrounColor = 'rgba(333, 333, 333, 1)')
    {
        $dados = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => $title,
                    'data' => $datasetsData,
                    'backgroundColor' => $datasetsColors,
                    'borderColor' => $backgrounColor,
                ]
            ],
        ];

        return ApiReturn::SuccessMessage('success', 200, $dados ?? []);
    }
}
