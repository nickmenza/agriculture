<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Banner extends Model
{
    protected $table = 'banner';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'banner_name',
        'banner_name_en',
        'images',
        'type'
    ];
}
