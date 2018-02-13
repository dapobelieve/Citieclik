<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class VerifiedUser
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
        if(Auth::user()->verify)
            return $next($request);
        return redirect()->route('home')->with('authMsg', 'Your account has not been verified. Check your mail and click the link sent to you upon registration');
    }
}
