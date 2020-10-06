<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
use App\Feature;
use App\Prefecture;
use App\Image;

class SearchController extends Controller
{
    public function search(Request $request) {
        // $keyword = $request->input('keyword');
        $search = $request->all();
        // $query = Residence::query();
        // $query = Residence::query();
        // ->join('prefectures', function ($query) use ($request) {
        //     $query->on('residences.prefecture_id', '=', 'prefectures.id');
        // // })->join('features', function ($query) use ($request) {
        // //     $query->on('residences.feature_id', '=', 'features.id');
        // });
        // })->join('images', 'images.residence_id', '=', 'residence_id');
        // $query = Residence::join('prefectures', 'residences.prefecture_id', '=', 'prefectures.id')
        //                     ->join('residence_features', 'residences.id', '=', 'residence_features.residence_id');
                            // ->query();
        // $query->join('prefectures', function ($query) use ($request) {
        //     $query->on('residences.prefecture_id', '=', 'prefectures.id');
        // });
        // $query->join('features', function ($query) use ($request) {
        //     $query->on('residences.feature_id', '=', 'features.id');
        // });
        // $query->whereHas('prefectures', function($query){
        //     $query->where('name', 'LIKE', "%{$request->keyword}%");
        // });
        if(!empty($search)) {
            $query = Residence::where('residences.name', 'LIKE', "%{$request->keyword}%")
            // $query->where('residences.name', 'LIKE', "%{$request->keyword}%")
                  ->orWhere('location', 'LIKE', "%{$request->keyword}%")
                  ->orWhere('introduction', 'LIKE', "%{$request->keyword}%");
                //   ->orWhere('minimum_rent', '>=', $request->minimum_rent)
                //   ->orWhere('maximum_rent', '<=', $request->maximum_rent)
                //   ->orWhere('common_charge', '<=', $request->common_charge)
                //   ->orWhere('term', '<=', $request->term)
                //   ->orWhere('room_num', '>=', $request->room_num)
                //   ->orWhere('prefectures.name', 'LIKE', "%{$request->keyword}%");
                //   ->orWhere('content', 'LIKE', "%{$request->keyword}%");
                //   ->whereHas('prefectures', function($query){
                //       $query->where('name', 'LIKE', "%{$request->keyword}%")
                //   });
                //   ->whereHas('features', function($query){
                //       $query->where('content', 'LIKE', "%{$request->keyword}%")
                //   });
        }
        if(!empty($request->minimum_rent)) {
            $query->where('minimum_rent', '>=', $request->minimum_rent);
        }
        $residences = $query->get();
        // $residences = $query->join('images', 'images.residence_id', '=', 'residences.id')->get();
        // dd($residences);

        $params = [
            'residences' => $residences,
        ];
        return view('search', $params);
    }
}