<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Asl\HomeController;
use App\Controllers\Asl\Auth\LoginController;
use Illuminate\Support\Facades\Route;

class RedirectIfAsl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'asl')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/asl/home');
        }

        return $next($request);
    }

}
