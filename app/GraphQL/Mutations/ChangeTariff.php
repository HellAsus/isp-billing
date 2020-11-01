<?php

namespace App\GraphQL\Mutations;

use GraphQL\Error\Error;
use App\Models\{Customer, Tariff};

class ChangeTariff
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $customer = Customer::find($args['customerId']);
        if (!$customer) {
            throw new Error('User not found');
        }

        $newTariff = Tariff::find($args['newTariffId']);
        if (!$newTariff) {
            throw new Error('Tariff not found');
        }

        if (in_array($newTariff->id, $customer->tariff->allowedTariffs())) {
            return $customer->setTariff($newTariff->id);
        } else {
            throw new Error('Allowed tariffs not found');
        }

    }

}
