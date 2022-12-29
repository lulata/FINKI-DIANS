<?php

namespace App\Filters;

use Closure;

class WithProperties
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('withProperties')) {
            return $next($request);
        }

        return $next($request)->with('properties');
    }
}