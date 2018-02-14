<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SalesAgentMiddleware
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
        if(Auth::check() && !Auth::user()->isAgent())
            return redirect()->route('home');
        return $next($request);
    }
}
