<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websetting extends Model
{
    use HasFactory;
    #create all the fillable
    protected $fillable = [
        'page_title',
        'tag',
        'email',
        'google_map_url',
        'logo_url',
        'footer_text',
        'banner_img_url',
    ];
}
