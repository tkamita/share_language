<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
// use Intervention\Image\Facades\Image;
use App\Residence;
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
        $feature = Feature::find($id);
        $prefectures = Prefecture::all();
        $features = Feature::all();
        // $residences = $prefecture->residences->where('features.id', $feature);
        // $residences = $prefecture->residences->whereHas('features', function ($query) {$query->where('features.id', '=', '$feture');});
        $residences = Residence::whereHas('prefecture', function ($query) { $query->where('prefectures.id', '=', '$prefecture.id'); })
        // $residences = Residence::where('prefecture_id', '=', '$prefecture');
                                ->whereHas('features', function ($query) { $query->where('features.id', '=', '$feature.id'); })->get();
                                // dd($residences);
        // $query = Residence::query();
        // $query->whereHas('prefecture', function ($query) { $query->where('prefectures.id', '=', '$prefecture'); });
        // $query->whereHas('features', function ($query) { $query->where('features.id', '=', '$feature'); });
        // $residences = $query->get();
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
// $query = Post::query();
// $query->where('user_id',1); 
// $query->where('status',1);
// $posts = $query->get();/

// $posts = App\Residence::whereHas('prefectures', function ($query) {     $query->where('prefectures.id', '=' '$prefecture'); })
//                         ->whereHas('features', function)
// ->get();