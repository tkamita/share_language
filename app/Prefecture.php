<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
        'name',
    ];

    public function residences() {
        return $this->belongsToMany('App\Residence');
    }
}
