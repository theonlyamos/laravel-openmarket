<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    //

    public function user(){
        $this->belongsTo(User::class);
    }

    protected $casts = [
        'items' => 'array'
    ];
}
