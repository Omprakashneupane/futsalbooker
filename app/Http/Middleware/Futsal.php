<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Futsal
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
        if (auth()->check() && auth()->user()->isFutsal()) {
      	 
        	return $next($request);
        }
        return redirect('/');
    }
}
