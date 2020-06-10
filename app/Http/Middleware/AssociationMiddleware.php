<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AssociationMiddleware
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
        if(Auth::user()->usertype == 'association'){
            return $next($request);

        }else{
            return redirect('/home')->with('status','you"re not allowed to association dashboard');
        }
    }
}
