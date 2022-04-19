<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juice extends Model
{
    //protected $table = 'some_name';
    protected $casts = [
        'toppings' => 'array'
    ];
}
