<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/products', 'namespace' => '\App\Modules\Admin\Products\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'ProductsController@index')->name('admin.products.index');
	Route::post('/create','ProductsController@create')->name('admin.products.create');
});

