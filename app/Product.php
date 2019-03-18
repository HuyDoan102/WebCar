<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'phone', 'description', 'status' , 'image', 'price'
    ];

    public function category()
    {
        return $this->belongsTo(Supplier::class, 'category_id');
    }
}
