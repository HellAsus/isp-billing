<?php

namespace App\GraphQL\Mutations;

use App\Models\{Customer, CustomerBlock};
use GraphQL\Error\Error;

class BlockCustomer
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        if (!$customer = Customer::find($args['customer_id'])) {
            throw new Error('User not found');
        }

        if ($customer->block_id) {
            throw new Error('User already blocked');
        } else {
            $lens = $args['lens'];
            $increments = now()->addDays($lens) < $customer->expiration_date ? $lens : now()->diffInDays($customer->expiration_date);
            $block = $customer->blocks()->create([
                'lens' =>  $lens,
                'description' => $args['description'],
                'increments' => $increments,
                'unblock_date' => now()->addDays($lens),
            ]);
            $customer->block_id = $block->id;
            $customer->save();
            return $customer;
        }


    }
}
