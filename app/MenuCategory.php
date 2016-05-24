<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public $fillable = [
        'menu_category'
    ];


    public function menuItems()
    {
        return $this->hasMany('App\ItemCategories');
    }

}
