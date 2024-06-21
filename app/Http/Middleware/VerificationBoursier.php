<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class VerificationBoursier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('middle');
        if (Auth::check()) {
           
            $user =  Auth::user();
            
            if (!$user->hasRole('Boursier') || is_null($user->eligible()?->first()) ) {
              return redirect()->route('route-verification')->with("message", "Vérification d'éligilibité");
          
            }
        }

        return $next($request);
    }
}
