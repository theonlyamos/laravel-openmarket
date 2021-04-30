<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    //

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    protected $casts = [
        'items' => 'array'
    ];
}
