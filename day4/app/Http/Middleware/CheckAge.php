<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        //echo "Shkolla Digjitale Prizren";

        if($request-> age >= 18){
            echo "Keni te drejt vote";
        }
        else{
            echo "Nuk keni te drejt vote";
        }
        

        return $next($request);
        
    }
}
