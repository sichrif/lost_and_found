<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class FinderMiddleware
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
        if(Auth::user()->usertype == 'Finder'){
            return $next($request);

        }else{
            return redirect('/home')->with('status','you"re not allowed to Finder dashboard');
        }

    }
}
