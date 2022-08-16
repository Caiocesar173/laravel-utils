<?php

namespace Caiocesar173\Utils\Http\Requests;

use Illuminate\Validation\Rule;
use Caiocesar173\Utils\Abstracts\FormRequestAbstract;
use Caiocesar173\Utils\Enum\StatusEnum;

class UserRequest extends FormRequestAbstract
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
        $rules = [
            "id"                => 'nullable',
            "name"              => ['nullable', 'min:5'],
            "username"          => ['nullable', 'min:5', 'max:50'],
            "password"          => ['nullable', 'min:8'],
            "email"             => ['nullable', 'email'],
            "status"            => ['nullable', Rule::in(StatusEnum::keys())],
            "email_verified_at" => ['nullable', 'boolean'],
        ];

        return $rules;
    }

    protected function postRules()
    {
        $rules = [
            "name"     => ['required', 'min:5'],
            "username" => ['nullable', 'min:5', 'max:50', Rule::unique('users', 'username')],
            "password" => ['required', 'min:8'],
            "email"    => ['required', 'email', Rule::unique('users', 'email')],
            "status"   => ['nullable', Rule::in(StatusEnum::keys())],
        ];

        return $rules;
    }

    protected function putRules()
    {
        $rules = [
            "name"             => ['nullable', 'min:5'],
            "username"         => ['nullable', 'min:5', 'max:50', Rule::unique('users', 'username')],
            "email"            => ['nullable', 'email', Rule::unique('users', 'email')],
            "status"           => ['nullable', Rule::in(StatusEnum::keys())],
            "OldPassword"      => ['nullable', 'min:8'],
            "newPassword"      => ['nullable', 'min:8'],
            "confirm_password" => ['nullable', 'min:8'],
        ];

        return $rules;
    }

    protected function deleteRules()
    {
        $rules = [];
        return $rules;
    }
}
