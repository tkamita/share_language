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

    public function create() {
        return view('residences.create');
    }

    public function store(Request $request) {
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
        $residence = new Residence;
        $form = $request->all();
        unset($form['_token']);
        $residence->fill($form)->save();
        return redirect()->route('residences.show', $residence);
    }


    public function show($id) {
        $residence = Residence::find($id);
        return view('residences.show', $residence);
    }

    public function edit($id) {
        $residence = Residence::find($id);
        return view('residences.edit', $residence);
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