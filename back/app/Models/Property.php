<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $visible = ['type', 'data'];
    public function node()
    {
        return $this->belongsTo(Node::class);
    }
}
