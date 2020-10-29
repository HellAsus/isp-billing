<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;
use Illuminate\Validation\Rule;

class UpdateCustomerInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => [
                'required'
            ],
            'username' => [
                'sometimes',
                Rule::unique('customers', 'username')->ignore($this->arg('id'), 'id'),
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'username.unique' => 'The chosen username is not available',
        ];
    }
}
