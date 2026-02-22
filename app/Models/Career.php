<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['title', 'category', 'duration', 'description', 'deadline', 'service_id', 'html_content', 'title_ar', 'category_ar', 'duration_ar', 'description_ar', 'html_content_ar', 'apply_link', 'published_at', 'working_hours', 'working_hours_ar'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
