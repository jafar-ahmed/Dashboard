<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Supplier extends Authenticatable
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = [
     'title',
     'image',
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
