<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{

	public function search(Request $request){
		$title = "";
		$artist = "";
		$title = urlencode($request->input('title'));
		$artist = urlencode($request->get('artist'));
		// dd($artist);
		$json = json_decode(file_get_contents('http://api.musixmatch.com/ws/1.1/track.search?apikey=a7a14ffe1493fe4e38173bd28b97ad87&q_track='.$title.'&q_artist='.$artist.'&page_size=10&page=1'),true);
    	// dd($json);
    	// return $json;
		return view('music', compact('json'));
    	// dd($json->title);
	}

}
