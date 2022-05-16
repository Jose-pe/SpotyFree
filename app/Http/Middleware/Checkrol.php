<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkrol
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
        if ($request->user()->rol == "User") {
           return redirect('/home');
        }
        
        return $next($request);
    }
}
