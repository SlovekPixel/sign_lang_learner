<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;
class admin
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
        if(Auth::user()->admin != 1){
            abort(403);
        }
        else{
            return $next($request);
        }
    }
}
