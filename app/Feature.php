<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'content',
    ];

    // public function residences() {
    //     return $this->belongsToMany('App\Residence');
    // }

    public function residence_features() {
        return $this->hasMany(ResidenceFeature::class);
    }
}
