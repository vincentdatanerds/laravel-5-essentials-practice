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

Route::get('cats', function(){
	$cats = Furbook\Cat::all();
	return view('cats.index')->with('cats', $cats);
});


Route::group(['prefix' => 'cats'], function () {
   Route::get('create', function(){
 	 return view('cats.create');
   });
});

Route::post('cats', function(){
    $cat = Furbook\Cat::create(Input::except('updated_at'));
    return redirect('cats/'.$cat->id)
        ->withSuccess('Cat has been created.');
});


Route::get('cats/{cat}', function(Furbook\Cat $cat)
{
    return view('cats.show')->with('cat', $cat);

})->where('id', '[0-9]+');




