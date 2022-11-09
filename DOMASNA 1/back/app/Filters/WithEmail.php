<?php

namespace App\Filters;

use Closure;

//Dependant on WithProperties Filter
class WithEmail
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('withEmail')) {
            return $next($request);
        }

        return $next($request)->whereHas('properties', function($q) {
            $q->where([['type', 'email']]);
        });
    }
}