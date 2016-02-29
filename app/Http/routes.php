<?php

Route::get('/', function () {
    return view('calender/index');
});

Route::group(['middleware' => ['web']], function () {
    
    Route::get('calender', function () {
	    return view('calender/index');
	});

    Route::get('graph','Graph\GraphController@check');
});
