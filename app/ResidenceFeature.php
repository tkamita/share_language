<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidenceFeature extends Model
{
    protected $fillable = [
        'residence_id', 'feature_id',
    ];

    public function residence() {
        return $this->belongsTo(Residence::class);
    }

    public function feature() {
        return $this->belongsTo(Feature::class);
    }
}
