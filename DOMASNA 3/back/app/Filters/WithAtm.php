<?php

namespace App\Filters;

use Closure;

//Dependant on WithProperties Filter
class WithAtm
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('withAtm')) {
            return $next($request);
        }

        return $next($request)->whereHas('properties', function($q) {
            $q->where([['type', 'atm'], ['data', 'yes']]);
        });
    }
}