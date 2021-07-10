<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('privato.auth:privato');
    }

    /**
     * Show the Privato dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('privato.home');
    }
    
}
