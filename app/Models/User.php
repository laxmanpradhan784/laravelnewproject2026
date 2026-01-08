<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'mobile',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
