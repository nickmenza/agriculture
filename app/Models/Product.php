<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    protected $table = 'product';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'product_name',
        'product_name_en',
        'product_name_old',
        'detail',
        'images',
    ];
}
