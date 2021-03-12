<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function store_products(){
      return $this->hasMany(StoreProduct::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    protected $casts = [
        'colors'    => 'array',
        'sizes'     => 'array'
    ];

    protected $guarded = [];
}
