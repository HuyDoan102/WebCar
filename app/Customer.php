<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'dob', 'address', 'role_id'
    ];

    protected $hidden = [
        'password',
    ];
}
