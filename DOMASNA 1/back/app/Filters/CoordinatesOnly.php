<?php

namespace App\Filters;

use Closure;

class CoordinatesOnly
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('coordinatesOnly')) {
            return $next($request);
        }        

        return $next($request)->select('id', 'longitude', 'latitude');
    }
}