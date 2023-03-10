<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use HasFactory; 
    protected $fillable = [
        'page_id',
        'url',
        'is_landing_page',
        'caption'
    ];
    public function page(){
        return $this->belongsTo(Page::class);
    }
}
