<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    protected $table = 'products';

    public function brand()
    {
        return $this->belongsTo(Brand::Class);
    }
}
