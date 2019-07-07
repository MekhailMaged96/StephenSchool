<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$roles)
    {
        
        $adminrole = Auth::guard('admin')->user()->role->id;
        $role = explode('|',$roles);

       foreach($role as $r){
        if($adminrole==$r){
            return $next($request);
         }
       }
       
        return abort(404);
    }
}
