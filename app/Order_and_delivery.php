<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_and_delivery extends Model
{
    protected $fillable = [
        'name', 'items','zip','address1','address2','contact','city'
    ];
}
