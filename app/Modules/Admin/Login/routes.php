<?php
	
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => '/admin/login', 'namespace' => '\App\Modules\Admin\Login\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'LoginController@index')->name('login.index');
	
	Route::post('/post','LoginController@post')->name('login.post');
});

Route::group(['prefix' => '/admin/logout', 'namespace' => '\App\Modules\Admin\Login\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'LoginController@logout')->name('login.logout');
});




