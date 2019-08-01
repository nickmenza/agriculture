<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contact extends Model
{
    protected $table = 'contact';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message',

    ];
}
