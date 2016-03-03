<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
        if($roleName == "user"){
            return $next($request);
        }else if($roleName == "hr"){
            return $next($request);
        }else if($roleName == "denied"){
            return $next($request);
        }
    }
}
