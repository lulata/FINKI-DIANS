<?php

namespace App\Filters;

use Closure;

class Sort
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('sort') &&
            strtolower(request()->input('sort')) != 'asc' ||
            strtolower(request()->input('sort')) != 'desc') {
            return $next($request);
        }        

        return $next($request)->orderBy('id', request()->input('sort'));
    }
}