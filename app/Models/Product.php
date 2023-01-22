<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'code',
        'product_details',
        'product_specifications',
        'color_id',
        'category_id',
        'supplier_id',
        'product_id',
        'is_active',
        'on_sale',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public function ProductImages()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
    }
    public function productColors()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

}
