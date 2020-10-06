<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\Customer;
use App\Exceptions\CustomException;

class CustomerMutator
{
    /**
     * Return a value for the field.
     *
     * @param  @param  null  $root Always null, since this field has no parent.
     * @param  array<string, mixed>  $args The field arguments passed by the client.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Shared between all fields.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Metadata for advanced query resolution.
     * @return mixed
     */
    public function __invoke($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        //
    }
    public function updateTariff (Customer $customer)
    {
        if ($customer->tariff_id !== 5) {
            throw new CustomException(
                'Wrong Tarif Id',
                'SSS'
            );
        }
        return $customer->tariff_id;
    }
}
