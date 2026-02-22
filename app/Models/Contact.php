<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'whatsapp',
        'whatsapp2',
        'phone',
        'phone_eg',
        'phone_sd',
        'phone_uk',
        'phone_om',
        'facebook',
        'tiktok',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'email',
        'address',
        'address_ar',
        'statProjects',
        'statClients',
        'statTeam',
        'statYears'
    ];
}
