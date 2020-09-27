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

    public function features() {
        return $this->belongsToMany('App\Feature');
        // return $this->belongsToMany('App\Feature', 'role_user', 'user_id', 'role_id');
    }

    public function prefectures() {
        return $this->belongsToMany('App\Prefecture');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    
    
}
