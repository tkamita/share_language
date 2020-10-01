<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
// use Intervention\Image\Facades\Image;
use App\Image;
use Illuminate\Support\Facades\Storage;

class PrefectureController extends Controller
{
    public function show($id) {
        $prefecture = Prefecture::find($id);
        $image = Image::find($id);
        // Storage::disk('lacal')->exists('public/storage/img'.$image->file_name);
        $params = [
            'prefecture' => $prefecture,
            'image' => $image,
        ];
        return  view('prefecture.show', $params);
    }
}