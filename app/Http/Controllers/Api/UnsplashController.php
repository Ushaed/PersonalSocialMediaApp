<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnsplashController extends Controller
{
	public function likeOthersPhoto(){
		return view('frontend.unsplash.unsplash-like');
	}
}
