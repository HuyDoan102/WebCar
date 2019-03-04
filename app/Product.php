<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'phone', 'description', 'status' , 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
