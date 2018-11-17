<?php
	
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin/insights', 'namespace' => '\App\Modules\Admin\Insights\Controllers', 'middleware' => ['web','admin'],'guard' => 'admin'], function(){
	Route::get('/', 'InsightsController@index')->name('insights.index');
	Route::get('/getTopPicks', 'InsightsController@getTopPicks')->name('insights.getTopPicks');
	Route::get('/getRevenue', 'InsightsController@getRevenue')->name('insights.getRevenue');
});

