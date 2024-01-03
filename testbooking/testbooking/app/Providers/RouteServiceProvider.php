<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */


    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::prefix('asl')
                ->as('asl.')
                ->middleware('web')
                ->namespace('App\Http\Controllers\Asl')
                ->group(base_path('routes/asl.php'));

            Route::prefix('laboratorio')
                ->as('laboratorio.')
                ->middleware('web')
                ->namespace('App\Http\Controllers\Laboratorio')
                ->group(base_path('routes/laboratorio.php'));

            Route::prefix('medico')
                ->as('medico.')
                ->middleware('web')
                ->namespace('App\Http\Controllers\Medico')
                ->group(base_path('routes/medico.php'));

            Route::prefix('azienda')
                ->as('azienda.')
                ->middleware('web')
                ->namespace('App\Http\Controllers\Azienda')
                ->group(base_path('routes/azienda.php'));

            Route::prefix('privato')
                ->as('privato.')
                ->middleware('web')
                ->namespace('App\Http\Controllers\Privato')
                ->group(base_path('routes/privato.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
