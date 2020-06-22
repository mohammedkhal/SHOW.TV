<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Auth
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

        if (!FacadesAuth::check()) {
            return redirect()->route('auth.sign-up');
        }
        return $next($request);
    }
}
