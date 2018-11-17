<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/dashboard', 'namespace' => '\App\Modules\Admin\Dashboard\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
});

