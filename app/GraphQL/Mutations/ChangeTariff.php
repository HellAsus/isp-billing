<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

class ChangeTariff
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function listAllowTariff()
    {
        Auth::user()->tarif_id;




    }
}
