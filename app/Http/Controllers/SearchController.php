<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
use App\Feature;
use App\Prefecture;

class SearchController extends Controller
{
    public function search(Request $request) {
        // $keyword = $request->input('keyword');
        $search = $request->all();
        $query = Residence::query();
        // $query->join('prefectures', function ($query) use ($request) {
        //     $query->on('residences.prefecture_id', '=', 'prefectures.id');
        // });
        // $query->join('features', function ($query) use ($request) {
        //     $query->on('residences.feature_id', '=', 'features.id');
        // });
        if(!empty($search)) {
            $query->where('name', 'LIKE', "%{$request->keyword}%")
                  ->orWhere('location', 'LIKE', "%{$request->keyword}%")
                  ->orWhere('introduction', 'LIKE', "%{$request->keyword}%");
                //   ->orWhere('minimum_rent', '>=', $request->minimum_rent)
                //   ->orWhere('maximum_rent', '<=', $request->maximum_rent)
                //   ->orWhere('common_charge', '<=', $request->common_charge)
                //   ->orWhere('term', '<=', $request->term)
                //   ->orWhere('room_num', '>=', $request->room_num)
                //   ->orWhere('prefectures.name', 'LIKE', "%{$request->keyword}%")
                //   ->orWhere('content', 'LIKE', "%{$request->keyword}%");
        }
        $residences = $query->get();
        $params = [
            'residences' => $residences,
        ];
        return view('search', $params);
    }
}
