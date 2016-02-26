<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Jenssegers\Mongodb\Model as Eloquent;
use App\Login;

class LoginController extends Controller
{
    public function getData(Request $request)
    {
    	$email=$request->email;
    	$password=$request->password;

    	$users = DB::collection('users')->where('email', $email);
    	echo "<pre>";
    	print_r($users[0]['name']);
    }
}
