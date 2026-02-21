<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'whatsapp',
        'whatsapp2',
        'phone',
        'facebook',
        'tiktok',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'email',
        'address',
        'statProjects',
        'statClients',
        'statTeam',
        'statYears'
    ];
}
