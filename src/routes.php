<?php

Route::group(['prefix' => 'redis-ui'], function(){
    Route::get('/', '\Zavrik\RedisUI\Http\Controllers\UIController@index')->name('redis_ui')->middleware(['web', 'auth']);

    Route::group(['prefix' => 'api'], function(){
        Route::post('filters', '\Zavrik\RedisUI\Http\Controllers\API\RedisFilterController@index');
        Route::post('delete', '\Zavrik\RedisUI\Http\Controllers\API\RedisFilterController@delete');
        Route::post('create', '\Zavrik\RedisUI\Http\Controllers\API\RedisFilterController@add');
        Route::post('edit', '\Zavrik\RedisUI\Http\Controllers\API\RedisFilterController@update');
        Route::get('get-db', '\Zavrik\RedisUI\Http\Controllers\API\DefaultController@getAvailableDatabase');
    });
});
