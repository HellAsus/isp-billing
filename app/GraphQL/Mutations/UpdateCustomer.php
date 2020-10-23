<?php

namespace App\GraphQL\Mutations;

use Validator;
use App\Models\Customer;
use GraphQL\Error\Error;

class UpdateCustomer
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        if (!$customer = Customer::find($args['id'])) {
            throw new Error('User not found');
        }

        if (isset($args['username'])) {
            $customer->username = $args['username'];
        }

        if (isset($args['full_name']) && $args['full_name'] != $customer->full_name) {
            $customer->full_name = $args['full_name'];
        }

        if (isset($args['password'])) {
            $customer->password = bcrypt($args['password']);
        }

        $customer->save();

        return $customer;
    }
}
