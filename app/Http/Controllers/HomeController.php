<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

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
        // $prefectures = Prefecture::all();
        $query = Prefecture::query();
        // $query->where('user_id',1); 
        // $query->where('status',1);
        $query->whereIn('id',[12,13,14,15]);
        $prefectures = $query->get();
        // $prefectures = Prefecture::find(12, 13, 14, 15);
        $params = [
            'prefectures' => $prefectures,
        ];
        return view('home', $params);
    }
}
