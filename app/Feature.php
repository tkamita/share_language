<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'content',
    ];

    public function residences() {
        return $this->belongsToMany('App\Residence', 'residence_features', 'feature_id', 'residence_id');
    }

    public function residence_features() {
        return $this->hasMany(ResidenceFeature::class);
    }
}
