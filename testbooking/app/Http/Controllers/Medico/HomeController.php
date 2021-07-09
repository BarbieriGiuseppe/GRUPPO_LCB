<?php

namespace App\Http\Controllers\Medico;

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
        $this->middleware('medico.auth:medico');
    }

    /**
     * Show the Medico dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('medico.home');
    }
}
