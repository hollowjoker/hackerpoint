<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/insights', 'namespace' => '\App\Modules\Admin\Insights\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'InsightsController@index')->name('admin.insights.index');

	// Process
	Route::get('/getTopPicks', 'InsightsController@getTopPicks')->name('admin.insights.getTopPicks');
	Route::get('/getRevenue', 'InsightsController@getRevenue')->name('admin.insights.getRevenue');
});

