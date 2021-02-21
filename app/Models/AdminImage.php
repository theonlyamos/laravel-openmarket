<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminImage extends Model
{
    use HasFactory;

    protected $table = 'admin_images';
 
    protected $fillable = ['name', 'admin_id'];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user(){
        return $this->belongsTo('App\Admin');
    }

}
