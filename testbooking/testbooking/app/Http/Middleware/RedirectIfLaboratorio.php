<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Laboratorio\HomeController;
use App\Controllers\Laboratorio\Auth\LoginController;
use Illuminate\Support\Facades\Route;

class RedirectIfLaboratorio
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'laboratorio')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/laboratorio/home');
        }

        return $next($request);
    }

}
