<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/dashboard', 'namespace' => '\App\Modules\Admin\Dashboard\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
	Route::get('/get_analytics', 'DashboardController@getAnalytics')->name('dashboard.get.analytics');
});

