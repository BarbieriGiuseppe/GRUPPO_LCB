<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Privato\HomeController;
use App\Controllers\Privato\Auth\LoginController;


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
            return redirect()->route('privato.home');
        }

        return $next($request);
    }

}
