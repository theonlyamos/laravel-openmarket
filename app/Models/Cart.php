<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Cart extends Model
{
    //
    use SoftDeletes;

    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'items' => 'array',
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($post){
            $post->reference = (string) Str::uuid();
        });
    }
}
