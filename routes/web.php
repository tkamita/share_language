<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('top', 'HomeController@top')->name('top');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('search', 'SearchController@search')->name('search');
Route::get('/prefectures/{prefecture}/features/{feature}', 'PrefectureController@prefecture_feature')->name('prefecture_feature');
Route::get('/features/{feature}/prefectures/{prefecture}', 'FeatureController@feature_prefecture')->name('feature_prefecture');
Route::resource('residences', 'ResidenceController');
Route::resource('prefectures', 'PrefectureController');
Route::resource('images', 'ImageController');
Route::resource('features', 'FeatureController');


// Route::group(['middleware' => ['auth']], function(){
//     Route::resource('information' , 'InformationsController' ,['only' => ['create', 'edit']] );
//     }
//     Route::resource('information', 'InformationsController' ,['except' => ['create', 'edit']] );