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

    public function prefecture_feature($id) {
        $prefecture = Prefecture::find($id);
        $prefectures = Prefecture::all();
        $feature = Feature::find($id);
        $features = Feature::all();
        $residences = $prefecture->residences->where('features.id', $feature);
        $params = [
            'prefecture' => $prefecture,
            'prefectures' => $prefectures,
            'feature' => $feature,
            'features' => $features,
            'residences' => $residences,
        ];
        return view('prefecture/feature', $params);
    }
}