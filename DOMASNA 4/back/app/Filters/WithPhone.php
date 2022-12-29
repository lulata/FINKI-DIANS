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
        })->with('properties', function($q) {
            if (request()->has('withEmail')) {
                $q->where([['type', 'email']])->orWhere([['type', 'phone']]);
            } else {
                $q->where([['type', 'phone']]);
            }
        });;
    }
}