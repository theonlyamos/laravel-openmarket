<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'colors'    => 'array',
        'sizes'     => 'array'
    ];

    protected $guarded = [];

    public function store_products(){
      return $this->hasMany(StoreProduct::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function getRouteKey()
    {
        return $this->slug;
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::of($model->name)->slug('-');
        });
    }
}
