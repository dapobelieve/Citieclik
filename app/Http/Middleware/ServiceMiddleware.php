<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ServiceMiddleware
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
        if(Auth::user()->isSubscribed())
            return $next($request);
        else
            return redirect()->route('home')->with('authMsg', 'Your dont have an active suscription');
    }
}
