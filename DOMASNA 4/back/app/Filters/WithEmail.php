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
        })->with('properties', function($q) {

            if (request()->has('withPhone')) {
                $q->where([['type', 'email']])->orWhere([['type', 'phone']]);
            } else {
                $q->where([['type', 'email']]);
            }
        });
    }
}