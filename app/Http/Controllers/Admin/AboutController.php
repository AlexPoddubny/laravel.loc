<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    
    public function show() {
    	
		if(view()->exists('default.about')) {
			
			$articles = DB::select('SELECT * FROM `articles`');
			
			dump($articles);
			
			return view('default.about')->withTitle('Hello World');
			
		}
		abort(404);
	}
    
}
