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

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', array('uses'=>'IntroductionController@get_index'));
Route::get('website_developing_service', array('uses'=>'IntroductionController@get_website_developing_service'));
Route::get('developers_for_hire', array('uses'=>'IntroductionController@get_developers_for_hire'));
Route::get('contact', array('uses'=>'IntroductionController@get_contact'));