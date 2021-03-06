<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Azienda\HomeController;
use App\Controllers\Azienda\Auth\LoginController;
use Illuminate\Support\Facades\Route;

class RedirectIfAzienda
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'azienda')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/azienda/home');
        }

        return $next($request);
    }

}
