<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
	public function show(Request $request)
	{
		
		$user = Auth::user();
		
		if (!Auth::check()){
			
			$user = User::find(9);
			dump($user);
//			return redirect('/login');
		}
		
		if (Auth::viaRemember()){
			echo 'reLogin';
		}
		
		dump(Auth::id());
		
		return view('welcome');
	}
}
