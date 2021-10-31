<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class frontAuth
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
        $paths = $request->path();
        if( ($paths == "shipping-login" || $paths == "shipping-register" ||$paths == "shipping-address") && (Session::get('user'))){
            return redirect('/');
        }
        return $next($request);
    }
}
