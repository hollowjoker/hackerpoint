<?php
	
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => '/admin/register', 'namespace' => '\App\Modules\Admin\Registration\Controllers', 'middleware' => ['web']], function(){
	Route::get('/', 'RegistrationController@index')->name('admin.registration.index');
});




