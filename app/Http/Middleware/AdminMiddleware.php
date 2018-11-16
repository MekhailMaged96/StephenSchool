<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Support\Facades\Response;
class AdminMiddleware
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
        if(!Auth::check()){
            return redirect('/login');
        }
        // teacher 2  
        // student 0
        if(Auth::user()->role==0 || Auth::user()->role==2){
          return redirect('/home');
        }
        return $next($request);
    }
}
