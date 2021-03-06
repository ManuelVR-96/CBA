<?php

namespace CBA\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if (auth()->user()){
        if(auth()->user()->rol == "Administrador"){
            return $next($request);
          }
            return redirect('/admin');
        }
        return redirect('/login');
    }
}
    