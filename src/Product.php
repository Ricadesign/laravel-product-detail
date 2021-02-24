<?php

namespace Ricadesign\LaravelProductDetail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function path()
    {
        return config('product.path', 'product');
    }
}
