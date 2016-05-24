<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public $fillable = [
        'menu_category_id',
        'item',
        'description',
        'price'
    ];

    public function itemCategory()
    {
        return $this->belongsTo('App\MenuCategory', 'menu_category_id');
    }
}
