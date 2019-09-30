<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FootballController extends Controller
{
	public function coba(){
		$response = Request::get("https://api-football-v1.p.rapidapi.com/v2/predictions/157462",
			array(
				"X-RapidAPI-Host" => "api-football-v1.p.rapidapi.com",
				"X-RapidAPI-Key" => "895f9109c3msh72ab8ae9d84c6d2p16423ejsna502c0d061c9"
			)
		);

		return $response;
	}
}
