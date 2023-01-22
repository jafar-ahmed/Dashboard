<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Category extends Authenticatable
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'title',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
