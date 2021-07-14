<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Privato\HomeController;
use App\Controllers\Privato\Auth\LoginController;
use Illuminate\Support\Facades\Route;

class RedirectIfMedico
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'medico')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/medico/home');
        }

        return $next($request);
    }

}
