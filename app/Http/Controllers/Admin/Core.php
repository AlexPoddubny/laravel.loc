<?php
	
	namespace App\Http\Controllers\Admin;
	
	use App\Article;
	use Illuminate\Http\Request;
	
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;
	
	class Core extends Controller
	{
		
		protected static $articles;
		
		public function __construct()
		{
			//$this->middleware('mymiddle');
		}
		
		public static function addArticles($array)
		{
			return self::$articles[] = $array;
		}
		
		//list materials
		public function getArticles()
		{
//			$articles = DB::table('articles')->get();
			$articles = Article::where('id', '>', 3)->get();
			foreach ($articles as $article){
				echo $article->name . '<br>';
			}
			dump($articles);
//			return
		}
		
		//material
		public function getArticle($id)
		{
			
			echo 'Ответ - ' . $id;
		}
	}
