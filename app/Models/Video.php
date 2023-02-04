<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{

    protected $table = 'videos';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'viewer',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
