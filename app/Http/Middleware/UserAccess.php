<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class UserAccess {

	public function handle($request, Closure $next){
        
	    if (!Auth::guard('admin')->check()){
	    	return redirect()->route('login.index');
	    }

        return $next($request);

    }

}