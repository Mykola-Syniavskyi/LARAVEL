<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
  {
    return Redirect::to('/home');
      });



Route::get('/home', 'HomeController@showHome');


Route::get('/articles ', 'HomeController@showArticles');

Route::get('/about ', 'HomeController@showAbout');



Route::get('/article/{N} ', array('as' => '{N}',
                                 'uses' => 'HomeController@showArticle'));


 Route::get('/contact-us ', 'HomeController@showContactUs');
 //Route::post('/contact-us ', array('as' => 'contact-us', 'uses' =>'HomeController@showContactUs'));
 Route::post('/contact-us ',array('as' => 'contact-us', 'uses' =>'HomeController@showContactUs'));





 Route::get('/thank ', array('as' => 'thank', 'uses' =>'HomeController@showThank'));
 