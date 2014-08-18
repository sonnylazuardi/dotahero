<?php

Route::get('/', function()
{
	return Redirect::to('index.html');
});

Route::resource('heroes', 'HeroController');
Route::resource('heroes/page/{page?}', 'HeroController@index');