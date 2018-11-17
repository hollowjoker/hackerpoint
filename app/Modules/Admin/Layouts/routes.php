<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => '/admin/layouts', 'namespace' => '\App\Modules\Admin\Layouts\Controllers', 'middleware' => ['web']], function () {
    Route::get('/', 'LayoutsController@index')->name('admin.layouts.index');
});
