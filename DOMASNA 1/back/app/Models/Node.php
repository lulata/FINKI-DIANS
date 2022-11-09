<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    protected $visible = ['id', 'longitude', 'latitude', 'openstreetmap_url', 'properties', 'name'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
