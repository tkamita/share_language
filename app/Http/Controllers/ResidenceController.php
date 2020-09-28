<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
use App\Image;
use App\Prefecture;
// use Illuminate\Database\Eloquent\Model;


class ResidenceController extends Controller
{
    public function index() {
        $residences = Residence::all();
        return view('residence.index', $residences);
    }

    public function create() {
        $prefectures = Prefecture::all();
        $params = [
            'prefectures' => $prefectures,
        ];
        return view('residence.create', $params);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'minimum_rent' => 'required',
            'maximum_rent' => 'required',
            'common_charge' => 'required',
            'term' => 'required',
            'room_num' => 'required',
        ]);

        $prefecture_id = Prefecture::find('id');
        
        $residence = new Residence;
        $form = $request->all();
        unset($form['_token']);
        $residence->prefectures()->attach($prefecture_id);
        $residence->fill($form)->save();

        $image = new Image;
        $image->file_name = $request->file_name;
        $image->residence_id = $residence->id;
        $image->save();
        

        return redirect()->route('residences.show', $residence);
    }


    public function show($id) {
        $residence = Residence::find($id);
        $params = [
            'residence' => $residence,
        ];
        return view('residence.show', $params);
    }

    public function edit($id) {
        $residence = Residence::find($id);
        $prefectures = Prefecture::all();
        $params = [
            'prefectures' => $prefectures,
            'residence' => $residence,
        ];
        return view('residence.edit', $params);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'lacation' => 'required',
            'minimum_rent' => 'required',
            'maximum_rent' => 'required',
            'common_charge' => 'required',
            'term' => 'required',
            'room_num' => 'required',
        ]);
        $residence = Residence::find($id);
        $form = $request->all();
        unset($form['_token']);
        $residence->fill($form)->save();
        return redirect()->route('residences.show', $residence);
    }

    public function destroy($id) {
        $residence = Residence::find($id);
        $residence->delete();
        return redirect()->route('residences.index');
    }

}