<?php

namespace App\Http\Controllers\Asl;

use App\Http\Controllers\Controller;
use App\Models\Asl;
use App\Controllers\Asl\Auth\LoginController;
use App\Controllers\Asl\Auth;
use Illuminate\Support\Facades\DB;
use app\Http\Middleware\RedirectIfAsl;
use app\Http\Middleware\RedirectIfNotAsl;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('asl.auth:asl');
    }

    /**
     * Show the Asl dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home() {
        return view('asl.home');
    }
    
    /**
     * Show the Asl modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('asl.modifica');
    }
}
