<?php

namespace App\Http\Controllers\Azienda;

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
        $this->middleware('azienda.auth:azienda');
    }

    /**
     * Show the Azienda dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('azienda.home');
    }
}
