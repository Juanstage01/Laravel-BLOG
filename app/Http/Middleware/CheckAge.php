<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if($request->age >= 18){
        //     return $next($request);
        // }else{
        //     return redirect('no-autorizado');
        // }
        if(auth()->user()->email == 'jdancr@hotmail.com'){
            return $next($request);
        }else{
            return redirect('no-autorizado');
        }
        // return $next($request);
        // return redirect('/');
    }
}
