<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => '/admin/layouts', 'namespace' => '\App\Modules\Admin\Layouts\Controllers', 'middleware' => ['web']], function () {
    Route::get('/', 'LayoutsController@index')->name('admin.layouts.index');
    Route::get('/seller-login', 'LayoutsController@seller_login')->name('admin.layouts.seller-login');
    Route::get('/seller-signup', 'LayoutsController@seller_signup')->name('admin.layouts.seller-signup');
    Route::get('/product-add', 'LayoutsController@product_add')->name('admin.layouts.product-add');
    Route::get('/insights', 'LayoutsController@insights')->name('admin.layouts.insights');
});
