<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $fillable = ['name', 'icon', 'text', 'image', 'name_ar', 'text_ar'];
}
