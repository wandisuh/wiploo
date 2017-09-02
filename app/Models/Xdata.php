<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xdata extends Model
{
    protected $table = 'admins';
    
    protected $fillable = ['name', 'email', 'password'];
    
}