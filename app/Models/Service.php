<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'icon', 'description', 'slug', 'name_ar', 'description_ar'];

    public function projects()
    {
        return $this->hasMany(PortfolioProject::class);
    }
}
