<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\Privato\HomeController;


class RedirectIfNotAzienda
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $guard
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, $guard = 'azienda')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }

        $redirectToRoute = $request->expectsJson() ? '' : route('azienda.login');

        throw new AuthenticationException(
            'Unauthenticated.', [$guard], $redirectToRoute
        );
    }

}
