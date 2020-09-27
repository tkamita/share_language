<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
// use Illuminate\Database\Eloquent\Model;

class ResidenceController extends Controller
{
    public function index() {
        $residences = Residence::all();
        return view('residences.index', $residences);
    }

    public function show($id) {
        $residence = Residence::find($id);
        return view('residences.show', $residence);
    }
}
