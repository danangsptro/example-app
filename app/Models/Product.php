<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'title', 'slug', 'category_id', 'content', 'weight', 'price', 'discount'
    ];

    public function getImageAttribute($image)
    {
        return asset('storage/products/', $image);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }
}
