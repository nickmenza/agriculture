<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FileManagement extends Model
{
    protected $table = 'file_management';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'path_img',
    ];
}
