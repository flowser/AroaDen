<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {    	  
    	$username = Auth::user()->username;
    	  
    	if ( $username !== 'admin' ) {
	    	return redirect('/home');
        }	    	  
    	
        return $next($request);       
    }
}