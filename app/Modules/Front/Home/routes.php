<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'namespace' => '\App\Modules\Front\Home\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'HomeController@index')->name('home.index');
	// echo 1;
});

