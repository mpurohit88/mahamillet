<?php

namespace App\Http\Middleware;
use Sentinel;
use Closure;

class AdminMiddleware
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
        // Authenticated user should be admin
        if(Sentinel::check()&&Sentinel::getUser()->roles()->first()->slug == 'admin')
            return $next($request);
        else
            return redirect('/login');
    }
}
