<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    protected $table = 'article';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'article_name',
        'detail',
        'date',
        'type',
        'images',
        'url'
    ];
}
