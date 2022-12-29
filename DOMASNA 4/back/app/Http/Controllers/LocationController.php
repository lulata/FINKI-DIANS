<?php

namespace App\Http\Controllers;

use App\Filters\CoordinatesOnly;
use App\Filters\Limit;
use App\Filters\Sort;
use App\Filters\WithAtm;
use App\Filters\WithEmail;
use App\Filters\WithPhone;
use App\Filters\WithProperties;
use App\Filters\WithWebsite;
use App\Models\Node;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class LocationController extends Controller
{
    public function getBankLocations()
    {

        $data = app(Pipeline::class)
        ->send(Node::query())
        ->through([
            Sort::class,
            WithProperties::class,
            WithWebsite::class,
            WithAtm::class,
            WithPhone::class,
            WithEmail::class,
            Limit::class,
            CoordinatesOnly::class
        ])
        ->thenReturn()
        ->get()->toArray();

        return response(formatData($data), 200);
    }
}
