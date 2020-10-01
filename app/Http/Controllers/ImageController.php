<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function show($id) {
        $image = Image::find($id);
        $residence = $image->residence_id;
        $params = [
            'image' => $image,
            'residence' => $residence,
        ];
        return view('image.show', $params);
    }
    
    public function destroy($id) {
        $image = Image::find($id);
        $image->delete();
        return redirect()->view('/');
    }
}
