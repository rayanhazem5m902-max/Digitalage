<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'role', 'description', 'image', 'name_ar', 'role_ar', 'description_ar'];
}
