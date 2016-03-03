<?php

Route::get('/', function () {
    return view('index');
});

Route::post('checkLogin','Graph\GraphController@checkLogin');

Route::group(['middleware' => ['web']], function () {


    Route::get('calender', function () {
	    return view('calender/index');
	});

    Route::get('graph','Graph\GraphController@check');
});

Route::get('user/message', ['middleware' => 'role:user', function () {
    echo "User Screen";
}]);

Route::get('admin/message', ['middleware' => 'role:hr', function () {
    echo "hr Screen";
}]);

Route::get('accessdenied/message', ['middleware' => 'role:denied', function () {
    echo "Access Denied";
}]);