<?php

namespace App\Filters;

use Closure;

//Dependant on WithProperties Filter
class WithWebsite
{
    public function handle($request, Closure $next)
    {
        if (! request()->has('withWebsite')) {
            return $next($request);
        }

        return $next($request)->whereHas('properties', function($q) {
            $q->where([['type', 'website']]);
        });
    }
}