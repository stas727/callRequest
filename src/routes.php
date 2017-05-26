<?php

// LaravelNews/CallRequest - общий неймспейс нашего пакета

Route::group(['prefix'=>'stas727/callRequest','namespace' => 'stas727\callRequest\Controllers'], function() {

    Route::any('/', ['as' => 'callRequest_path','uses' => 'CallRequestController@index']);

});




