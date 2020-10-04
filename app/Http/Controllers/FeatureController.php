<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Prefecture;


class FeatureController extends Controller
{
    public function index() {
        $features = Feature::all();
        $params = [
            'features' => $features,
        ];
        return view('feature.index', $params);
    }

    public function store(Request $request) {
        $validationData = $request->validate([
            'content' => 'required',
        ]);
        $feature = new Feature;
        $form = $request->all();
        unset($form['_token']);
        $feature->fill($form)->save();
        return redirect()->route('features.index');
    }

    public function edit($id) {
        $feature = Feature::find($id);
        $features = Feature::all();
        $params = [
            'feature' => $feature,
            'features' => $features,
        ];
        return view('feature.edit', $params);
    }

    public function update(Request $request, $id) {
        $validationData = $request->validate([
            'content' => 'required',
        ]);
        $feature = Feature::find($id);
        $form = $request->all();
        unset($form['_token']);
        $feature->fill($form)->save();
        return redirect()->route('features.index');
    }

    public function destroy($id) {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect()->route('features.index');
    }
    
    public function show($id) {
        $feature = Feature::find($id);
        $prefectures = Prefecture::all();
        $params = [
            'feature' => $feature,
            'prefectures' => $prefectures,
        ];
        return view('feature.show', $params);
    }

    public function feature_prefecture($id) {
        $prefecture = Prefecture::find($id);
        $feature = Feature::find($id);
        $residences = $feature->residences->where('prefectures.id', $prefecture);
        $params = [
            'prefecture' => $prefecture,
            'feature' => $feature,
            'residences' => $residences,
        ];
        return view('feature/prefecture', $params);
    }
}
