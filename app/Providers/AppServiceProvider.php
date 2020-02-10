<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
	    /*Blade::directive('myDir', function($var){
	    	return "<h1>My Directive - $var</h1>";
	    });*/
	    
	    /*DB::listen(function ($query){
	    	dump($query->sql);
//	    	dump($query->bindings);
	    });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
