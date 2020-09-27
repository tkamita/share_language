<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    protected $fillable = [
        'name', 'introduction', 'location',
        'minimum_rent', 'maximum_rent', 'common_charge',
        'term', 'room_num', 'wifi',
        'bicycle', 'parking', 'motorcycle',
    ];
}
