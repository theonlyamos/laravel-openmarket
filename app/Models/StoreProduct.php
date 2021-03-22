<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
