<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

// use Illuminate\Http\Request;

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

    // public function residence_features() {
    //     return $this->hasMany(ResidenceFeature::class);
    // }

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }
    

    public function images() {
        return $this->hasMany(Image::class);
    }

    // public static function residence_search() {

    // }

}


// HasMany 
// // 条件指定を追加したい場合. $users = App\User::with(['posts' => function ($query) {     $query->where('title', 'like', '%first%'); }])->get(); 

// App\Residence::with(['features' => function ($query) { $query->where('title', 'like', '%first%'); ->orwhere}])
//         ->where(['hoge' => function ($query) {}])
//         ->orwhere
// get(); 

// with([‘child1’ => function ($query) {$query->where()}, ‘prefectures' => function ($query){$query->where()}]