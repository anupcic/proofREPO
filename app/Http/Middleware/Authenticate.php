<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use user;
class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$user = $request->user();
            if (!Auth::user() || Auth::user()->admin!=1) {
                return response('Your Are Unauthorized to Acess  this Page', 401);
            } 

            // elseif (!Auth::user()) {
            //     # code...
            //     return response ('Login first');
            // }

        return $next($request);
    }

      
}
