<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   

        //Middleware
        if(!session()->has('LoggedUser')){
            return redirect('slogin')->with('error', 'You need to Login First');
        }

        return $next($request);
    }
}
