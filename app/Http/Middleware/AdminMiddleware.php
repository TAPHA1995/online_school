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
        }elseif(Auth::user()->formation == 'Développement web backend')
        {
            return redirect('/home');
        }  
    }
}
