<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['title', 'category', 'duration', 'description', 'deadline', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
