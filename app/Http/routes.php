<?php

Route::get('/', function () {
    return view('index');
});

Route::post('/login','Login\LoginController@getData');

Route::group(['middleware' => ['web']], function () {
    
    Route::get('calender', function () {
	    return view('calender/index');
	});

	Route::get('graph', function () {
	    return view('graph/graph');
	});
});
