<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Prefecture;
use App\Residence;
use App\Feature;

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

    public function prefecture_feature($id) {
        $prefecture = Prefecture::find($id);
        $feature = Feature::find($id);
        return Residence::whereHas('prefectures', function($query) {
            $query->where('prefectures.id', $prefecture);
        })->where('features.id', $feature)->get();
    }
}

