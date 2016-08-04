<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
	// return 'All cats';
	return redirect('cats');
});


Route::get('cats', function(){
	$cats = Furbook\Cat::all();
	return view('cats.index')->with('cats', $cats);
});


Route::get('cats/{id}', function($id){
	return sprintf('Cats #%s', $id);
}) -> where('id', '[0-9]+');


Route::get('about', function(){
	//return 'Hi';
	return view('about') -> with('number_of_cats', 9000);
});
