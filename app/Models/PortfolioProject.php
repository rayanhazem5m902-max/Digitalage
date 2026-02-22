<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    protected $fillable = ['name', 'name_ar', 'service_id', 'category_name', 'description', 'image', 'html_content'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
