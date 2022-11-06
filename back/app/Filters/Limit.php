<?php

namespace App\Filters;

use Closure;

class Limit
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('limit') || !is_numeric(request()->input('limit'))) {
            return $next($request);
        }        

        return $next($request)->limit((int)request()->input('limit'));
    }
}