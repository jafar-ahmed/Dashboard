<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Color extends Authenticatable
{
    use HasFactory;
    protected $table = 'colors';

    protected $fillable = [
        'title',
        'color_id',
    ];



    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
