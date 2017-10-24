<?php

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

Route::resource('/personnel', 'PersonnelController');

Route::get('/candidat', [
  'uses' => 'CandidatController@index',
  'as' =>'candidats'
]);

Route::get('/candidat/create',[
  'uses'=>'CandidatController@create',
  'as'=>'candidat.create'
]);

Route::post('/candidat/store',[
  'uses'=>'CandidatController@store',
  'as'=>'candidat.store'
]);
