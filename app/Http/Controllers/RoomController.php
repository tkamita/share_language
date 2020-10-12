<?php

namespace App\Http\Controllers;

use App\Residence;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create() {
        $residences = Residence::all();
        $params = [
            'residences' => $residences,
        ];
        return view('rooms.create', $params);
    }
}
