<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'tel',
        'fax',
        'email',
        'address',
        'longitude',
        'latitude'
    ];
}
