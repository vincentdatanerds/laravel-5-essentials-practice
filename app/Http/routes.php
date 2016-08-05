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


Route::get('cats/{cat}', function(Furbook\Cat $cat){
	// $cat = Furbook\Cat::find($id);
	return view('cats.show') -> with('cat', $cat);
});


// Route::get('cats/{id}', function($id){
// 	$cat = Furbook\Cat::find($id);
// 	return view('cats.show') -> with('cat', $cat);
// });



Route::get('about', function(){
	//return 'Hi';
	return view('about') -> with('total_number_of_cats', 440);
});


Route::get('cats/breeds/{name}', function(){
	$breed = Furbook\Breed::with('cats')
		->whereName($name)
		->first();
	return view('cats.index')
		->with('breed', $breed)
		->with('cats', $breed->cats);


});



Route::get('cats/create', function(){
	// return view('cats.index');
	return view('about') -> with('total_number_of_cats', 440);
});



Route::get('hello', function(){
		return view('about') -> with('total_number_of_cats', 440);


});



