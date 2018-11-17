<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'namespace' => '\App\Modules\Front\Home\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'HomeController@index')->name('home.index');
	// echo 1;
});

Route::group(['prefix' => '/cart', 'namespace' => '\App\Modules\Front\Cart\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'CartController@index')->name('cart.index');
	// echo 1;
});

Route::group(['prefix' => '/checkout', 'namespace' => '\App\Modules\Front\Checkout\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'CheckoutController@index')->name('checkout.index');
	// echo 1;
});



