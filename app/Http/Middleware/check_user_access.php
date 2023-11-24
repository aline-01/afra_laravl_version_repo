<?php

namespace App\Http\Middleware;
use Cookie;
use Closure;
use Illuminate\Http\Request;

class check_user_access
{

    // protected $middleware = [        
    //     // ...
    //     \App\Http\Middleware\CheckTime::class
    //     // ...
    // ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cookie_name = Cookie::get("users_access");
        if (empty($cookie_name)) {
            return redirect("/users/login");
        }
    }
}
