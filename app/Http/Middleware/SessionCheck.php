<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SessionCheck
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
        
        // return response()->view('errors.404');
        // echo $request->url(); // GetFUll URL
        // echo  $request->path(); // Getting the URL after domain
        // echo str_plural(item);
        // echo str_singular("items")

        // echo "<script> alert('Session_Check') </script>";

        if (!$request->ajax()) {
            Session::forget('table');
            Session::put('table', $request->path() );
        }

        return $next($request);

    }
}
