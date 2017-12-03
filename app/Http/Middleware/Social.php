<?php

namespace App\Http\Middleware;

use Closure;

class Social
{
    /**
     * Handle an incoming request.
     * Ensure a wrong service is not passed in the SocialAuth link
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($request->service);


        return $next($request);
    }
}
