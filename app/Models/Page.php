<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    #make fillable
    protected $fillable = [
        'title',
        'subtitle',
        'order_number',
        'is_hidden',
        'content',
        'is_landing_page',
        'menu_title',
    ];
}
