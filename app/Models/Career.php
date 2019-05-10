<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Career extends Model
{
    protected $table = 'career';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'career_name',
        'detail',
        'location',
        'property',
    ];
}
