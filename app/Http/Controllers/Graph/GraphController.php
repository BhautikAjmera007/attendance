<?php

namespace App\Http\Controllers\Graph;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// 
use App\roles;
use App\User;

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

        // $client = new \GuzzleHttp\Client();
        // $res = $client->request('POST', 'http://hrms.knowarth.com/userloginapi/user/login',
        //     ['json' => ['username' => 'bhautik.ajmera','password'=>'Bh@uT!K2@!6']]
        // );

        // echo $res->getStatusCode();
        // echo "<pre>";
        // echo $res->getBody();
        // exit;

        // $res = $client->request('GET', 'http://hrms.knowarth.com/holidaysapi/holidaysapi');
        // $promise = $client->sendAsync($request)->then(function ($response) {
        //     echo 'I completed! ' . $response->getBody();
        //     $data=$response->getBody();
        // });
        // $promise->wait();
    }
}
