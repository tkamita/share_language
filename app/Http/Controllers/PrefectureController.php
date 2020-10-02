<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
// use Intervention\Image\Facades\Image;
use App\Image;
use App\Feature;
use Illuminate\Support\Facades\Storage;

class PrefectureController extends Controller
{
    public function show($id) {
        $prefecture = Prefecture::find($id);
        $features = Feature::all();
        $image = Image::find($id);
        // Storage::disk('lacal')->exists('public/storage/img'.$image->file_name);
        $params = [
            'prefecture' => $prefecture,
            'features' => $features,
            'image' => $image,
        ];
        return  view('prefecture.show', $params);
    }
}