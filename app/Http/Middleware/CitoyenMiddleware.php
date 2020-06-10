<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CitoyenMiddleware
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
        if(Auth::user()->usertype == 'citoyen'){
            return $next($request);

        }else{
            return redirect('/home')->with('status','you"re not allowed to Citoyen dashboard');
        }

    }
}
