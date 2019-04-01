<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'dob', 'address'
    ];

    protected $hidden = [
        'password',
    ];

    protected $table = "admins";
}
