<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StoreProduct extends Model
{
    use HasFactory;

    //protected $table = 'store_products';

    protected $guarded = [];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function store(){
        return $this->belongsTo('App\Models\Store');
    }

    public function getRouteKey()
    {
        return $this->slug;
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = (string) Str::of($model->product->name)->slug('-');
        });
    }
}
