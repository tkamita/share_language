<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

class PrefectureController extends Controller
{
    public function show($id) {
        $prefecture = Prefecture::find($id);
        $params = [
            'prefecture' => $prefecture,
        ];
        return  view('prefecture.show', $params);
    }
}