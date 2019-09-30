<?php

use App\Item;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('belajar', function (){
	return [
		'message' => 'aku belajar api'
	];
});

Route::get('item', function(){
	return Item::all();
});

// Route::get('item', function(){
// 	return Item::paginate(5);
// });

// Route::get('items/{item}', function($id){
// 	return Item::find($id);
// });

Route::get('items/{item}', function(Item $item){
	return $item;
});


Route::post('item', function(){
	return Item::create(request()->all());
});

Route::delete('item/{item}', function(Item $item){
	$item->delete();
	return "item deleted";
});
// Route::get('movie/search', 'Api\MovieController@index')->name('index');
Route::get('movie', 'Api\MovieController@search')->name('search');

Route::get('music', 'Api\MusicController@search')->name('coba');
