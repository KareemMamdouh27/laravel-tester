<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addUser extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','password'];
    protected $hidden   = ['email_verified_at', 'created_at','updated_at'];
}

