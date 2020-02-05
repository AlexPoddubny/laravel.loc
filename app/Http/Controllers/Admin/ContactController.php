<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	
	/*protected $request;
	
	public function __construct(Request $request)
	{
		$this->request = $request;
    }
    */
    public function show(Request $request, $id = false)
	{
//		echo '<h1 style="margin-top: 100px">' .$request->name . '</h1>';
		/*if ($request->is('contact/*')){
			echo '<h1 style="margin-top: 100px">' . $request->path() . '</h1>';
		}*/
//		echo '<h1 style="margin-top: 100px">' . $request->method() . '</h1>';
		
	    if ($request->isMethod('post')){
	    	return redirect()->route('contact')->withInput();
	    }
	    
		return view('default.contact', ['title' => 'Contacts']);
    }
}
