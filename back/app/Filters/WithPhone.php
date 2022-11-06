<?php

namespace App\Filters;

use Closure;

//Dependant on WithProperties Filter
class WithPhone
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('withPhone')) {
            return $next($request);
        }

        return $next($request)->whereHas('properties', function($q) {
            $q->where([['type', 'phone']]);
        });
    }
}