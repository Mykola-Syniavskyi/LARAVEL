<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }


	public function showHome()
	{ 
		$list= array('articles'=>'/articles','about'=> '/about','contact-us'=> '/contact-us');
		return View::make('home')->with('list', $list);
	}





	public function showArticles()
	{ 
		$list= array('article1'=>'article/1','article2'=>'article/2',
					'article3'=>'article/3','article4'=>'article/4','article5'=>'article/5',
					'article6'=>'article/6','article7'=>'article/7','article8'=>'article/8',
					'article9'=>'article/9','article10'=>'article/10',);
		return View::make('articles')->with('list', $list);
	}



	public function showAbout()
	{ 
		return View::make('about');
	}





	public function showArticle($N=null)
	{ 
		$name=$N;	
		return View::make('article', array('name'=>$name));
	}

	




	public function showContactUs()
	{  		 
		
		if (Input::has('name') && Input::has('message'))
		{
			return Redirect::to('thank')->withInput();
	
		}
		elseif(!$_POST)
		{	$error=null;
			return View::make('contact-us', array('error'=>$error));
							
		}
		else
		{
			$error='All form_filds must be filled in!';
			return View::make('contact-us', array('error'=>$error));
		}	
	}

	


	public function showThank()
	{	
		$name = Input::old('name');
    	return View::make('thank', array('name'=> $name));
	}
	
}
