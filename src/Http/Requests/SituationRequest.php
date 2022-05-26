<?php

namespace Caiocesar173\Utils\Http\Requests;

use Caiocesar173\Utils\Abstracts\FormRequestAbstract;

class SituationRequest extends FormRequestAbstract
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
                return $this->getRules();

            case 'POST':
                return $this->postRules();

            case 'PUT':
                return $this->putRules();

            case 'DELETE':
                return $this->deleteRules();

            default:
                return $this->postRules();
        }
    }

    protected function getRules()
    {
        $rules = [];

        return $rules;
    }

    protected function postRules()
    {
        $rules = [];

        return $rules;
    }

    protected function putRules()
    {
        $rules = [];

        return $rules;
    }

    protected function deleteRules()
    {
        $rules = [];

        return $rules;
    }
}
