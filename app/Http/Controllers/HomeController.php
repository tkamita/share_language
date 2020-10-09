<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
use App\Feature;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $features = Feature::all();
        $query = Prefecture::query();
        $query->whereIn('id',[12,13,14,15]);
        $prefectures = $query->get();
        $params = [
            'prefectures' => $prefectures,
            'features' => $features,
        ];
        return view('home', $params);
    }
    
    public function top() {
        return view('top');
    }
    
    public function about() {
        return view('about');
    }
}
