<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
        'name',
    ];

    public function residences() {
        return $this->hasMany('App\Residence');
        // return $this->belongsToMany('App\Residence');
        // return $this->belongsToMany('App\Residence', 'residence_prefectures', 'prefecture_id', 'residence_id');
    }
}
