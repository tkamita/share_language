<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enums\FaceWindow;
use App\Enums\FloorInfo;

class Room extends Model
{
    protected $fillable = [
        'residence_id', 'floor', 'room_num', 'extent',
        'rent', 'common_charge', 'room_info',
        // 'face_window',  'floor_info',
    ];

    protected $enumCasts = [
        'floor_info' => FloorInfo::class,
        'face_window' => FaceWindow::class,
    ];

    public function residence() {
        return $this->belongsTo(Residence::class);
    }
}
 