<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    #create fillable
    protected $fillable = [
        'page_url',
        'title',
        'parent_menu_id',
        'order_no',
    ];

    public function children(){
        return $this->hasMany(Menu::class, 'parent_menu_id');
    }
}
