<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{

	public function index(){
		
		return view('movie');
    	
	}

	public function search(Request $request){
		$title = "";
		$json = "";
		$title = $request->get('title');
		$json = json_decode(file_get_contents('http://www.omdbapi.com/?apikey=face1629&s='.$title),true);
    	// dd($json);
		return view('movie', compact('json'));
    	// dd($json->title);
	}
}
