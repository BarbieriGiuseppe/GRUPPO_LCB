<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Privato\HomeController;
use App\Controllers\Privato\Auth\LoginController;
use Illuminate\Support\Facades\Route;



class RedirectIfPrivato
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'privato')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/privato/home');
        }

        return $next($request);
    }

}
