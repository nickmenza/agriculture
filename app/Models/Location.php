<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Location extends Model
{
    protected $table = 'location';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'title',
        'location',
        'phone',
        'email',
        'link',
        'iframe',
        'images'
    ];
}
