<?php

namespace App\Http\Middleware;

use Closure;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ($request->(!Auth::user()) || $request->(Auth::user()->admin!=1)) {
        //     return redirect('/');
        // }
        if (!Auth::check) {
                # code...
                return response ('Login first');
            }
        return $next($request);
    }
}
