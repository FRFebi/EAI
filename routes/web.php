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
	$items = DB::table('items')->get();

	$jj = json_decode($items,true);
    // return view('home',compact('items'));
    // dd($jj);
    // return $jj;
    return view('bootstrap');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
