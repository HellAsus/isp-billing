<?php

namespace App\Http\Middleware;

use Illuminate\Support\Str;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful as BaseEnsureFrontendRequestsAreStatefulAlias;

class EnsureFrontendRequestsAreStateful extends BaseEnsureFrontendRequestsAreStatefulAlias
{

    public static function fromFrontend($request)
    {
        if(parent::fromFrontend($request)) {
            return true;
        }

        return Str::startsWith($request->headers->get('x-forwarded-host', ''), config('sanctum.stateful', []));
    }
}