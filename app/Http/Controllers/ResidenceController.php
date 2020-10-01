<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
use App\Image;
use App\Prefecture;
// use Intervention\Image\Facades\Image;
// use \InterventionImage;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


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

        
        $residence = new Residence;
        $form = $request->all();
        $residence->prefecture_id = $request->prefecture_id;
        unset($form['_token']);
        $residence->fill($form)->save();

        
        $image = new Image;
        $image->residence_id = $residence->id;
        $image->file_name = $request->file_name;
        $filename = $request->file('file_name')->store('public/img');
        $image->file_name = str_replace('public/img','',$filename);
        $image->save();
        
        // $image = new Image;
        // $image->file_name = $request->file_name;
        // $image->residence_id = $residence->id;
        // $image->save();

        // $file = $request->file('file_name');
        // $name = $file->getClientOriginalName();
        // $save_path = 'public/img/'.$name;
        // $image = Image::make($file)->resize(640, 427, function ($constraint) {
        //     $constraint->aspectRatio();
        // });
        // Storage::put($save_path, (string) $image->encode());
        

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