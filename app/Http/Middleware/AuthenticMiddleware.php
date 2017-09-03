<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticMiddleware
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
        if(Auth::check())
            return $next($request);
        return redirect()->route('home')->with('authMsg', 'You have to be logged in to access that page');
    }
}
