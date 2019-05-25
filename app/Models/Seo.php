<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Seo extends Model
{
    protected $table = 'seo';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'title',
        'keyword',
        'description',
        'type'
    ];
}
