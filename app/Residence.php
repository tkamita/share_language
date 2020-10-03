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
        return $this->belongsToMany('App\Feature', 'residence_features', 'residence_id', 'feature_id');
    }

    public function residence_features() {
        return $this->hasMany(ResidenceFeature::class);
    }

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }
    

    public function images() {
        return $this->hasMany(Image::class);
    }

    
    
}
