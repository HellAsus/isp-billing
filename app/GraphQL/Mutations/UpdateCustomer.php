<?php

namespace App\GraphQL\Mutations;

use App\Models\Customer;
use GraphQL\Error\Error;
use App\Exceptions\CustomException;
use Nuwave\Lighthouse\Exceptions\ValidationException;

class UpdateCustomer
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $customer = Customer::find($args['id']);

        //$args['tariff_id'] ??= $this->updateTariff($args['tariff_id']);

        if (isset($args['tariff_id'])) {
            if ($args['tariff_id'] != 5) {
                throw new Error('Not allow change tariff!');
            }
            $customer->tariff_id = $args['tariff_id'];
        }

        if (isset($args['username'])) {
            if ($args['username'] == 'test') {
                throw new Error('Bad name!');
            }
            $customer->username = $args['username'];
        }

        if (isset($args['full_name'])) {
            if ($args['full_name'] == 'test') {
                throw new Error('Bad name!');
            }
            $customer->full_name = $args['full_name'];
        }

        $customer->save();

        return $customer;
    }
}
