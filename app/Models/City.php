<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cities';
    protected $fillable = [
        'name_ar',
        'name_en',
        'deactivated_at',
    ];
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $appends = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getNameAttribute()
    {
        if (app()->getLocale() == 'en') {
            return $this->attributes['name_en'];
        }
        return $this->attributes['name_ar'];
    }
}
