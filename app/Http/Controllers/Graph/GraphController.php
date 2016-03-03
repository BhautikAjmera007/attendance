<?php

namespace App\Http\Controllers\Graph;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// 
use App\roles;
use App\User;
use Jenssegers\Mongodb\Model as Eloquent;

class GraphController extends Controller
{
    public function check()
    {
        $adminRole = roles::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'admin role', // optional
            'level' => 1, // optional, set to 1 by default
        ]);

        $moderatorRole = roles::create([
            'name' => 'Forum Moderator',
            'slug' => 'forum.moderator',
        ]);

        $user = User::find("1");
        
        $user->attachRole($adminRole);
        echo "done";

 
        // $response = \Httpful\Request::post('http://hrms.knowarth.com/userloginapi/user/login')->sendsJson()->body('{"username":"bhautik.ajmera","password":"Bh@uT!K2@!6"}')->send();
        // $cookie_session = $response->body->session_name . '=' . $response->body->sessid;
        // $response = \Httpful\Request::get("http://hrms.knowarth.com/holidaysapi/holidaysapi")->addHeader('Cookie', $cookie_session)->send();
        
        // foreach($response->body as $data){
        //     echo $data->Title;
        //     echo $data->Date;
        // }

    }

    public function checkLogin(Request $request)
    {
        // Get the user entered email
        $email=$request->email;

        $user = User::where('email', '=', $email)->get();
        $user_role=json_decode($user,true);
        $temp=$user_role[0]['role'];

        if($temp == "hr") {
            return redirect('admin/message');
        }else if($temp == "user") {
            return redirect('user/message');
        }else {
            return redirect('accessdenied/message');
        }
    }
}