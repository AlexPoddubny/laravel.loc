<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
	public function showLogin()
	{
		return view('auth.login');
	}
	
	public function authenticate(Request $request)
	{
		$arr = $request->all();
		
		if (Auth::attempt([
				'login' => $arr['login'],
				'password' => $arr['password']
			],
			$request->has('remember'))) {
			return redirect()->intended('/admin');
		}
		return redirect()->back()
			->withInput($request->only('login', 'remember'))
			->withErrors([
				'login' => 'Login incorrect!'
			]
		);
	}
}
