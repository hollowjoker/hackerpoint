<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/orders', 'namespace' => '\App\Modules\Admin\Orders\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'OrdersController@index')->name('admin.orders.index');
});

