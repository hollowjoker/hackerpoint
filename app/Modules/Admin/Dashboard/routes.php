<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/dashboard', 'namespace' => '\App\Modules\Admin\Dashboard\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
});

