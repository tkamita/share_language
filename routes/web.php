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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('residences', 'ResidenceController');


// Route::group(['middleware' => ['auth']], function(){
//     Route::resource('information' , 'InformationsController' ,['only' => ['create', 'edit']] );
//     }
//     Route::resource('information', 'InformationsController' ,['except' => ['create', 'edit']] );