<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
       //If User is already Logged iN
       if(session()->has('LoggedUser') && (url('slogin') == $request->url() || url('/') == $request->url())){
           return back();
       }
       
       
       
        return $next($request);
    }
}
