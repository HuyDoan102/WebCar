<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'dob', 'address', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
