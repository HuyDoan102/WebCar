<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oreder_product extends Model
{
     protected $fillable = [
        'product_id', 'order_id', 'quantity'
    ];


}
