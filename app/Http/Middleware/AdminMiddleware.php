<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


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
        if(Auth::user()->userType == 'admin') 
        {
            return $next($request);
        }else
        {
            return redirect('/homeDeveloppement_web_frontend_PHP') ;
        }  
    }
}
