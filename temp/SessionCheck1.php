<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;

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
        
        // $msg = null;
        // echo "<script> alert('{$msg}') </script>";


        if(!$request->ajax()) {
            Session::forget('table');
            Session::put('table', $request->path() );
        }else{

            $tables_obj = json_decode(json_encode( DB::select('SHOW TABLES') ), true); // object to array convert
            foreach ($tables_obj as $key => $value) {
                $tables[] =($value['Tables_in_pos']);
            }

            if (!in_array( $request->path(), $tables)) {
                response()->view('errors.404');
            }

        }

        // Check table Session exited (if yes then farther request goes)
        if (Session::has('table')) {
            return $next($request);    
        }else{
            return response()->view('errors.404');
        }


    } // # handle()


}
