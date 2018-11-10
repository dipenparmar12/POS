<?php

namespace App\Http\Middleware;

use Closure;



class Ajax_check {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {
        if (!$request->ajax()) {
            // return response()->view('errors.404');
        }

        return $next($request);
    }
}
