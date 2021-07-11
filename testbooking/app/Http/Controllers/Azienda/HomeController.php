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
    public function home() {
        return view('azienda.home');
    }

     /**
     * Show the Azienda prenotazione.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function prenotazione() {
        return view('azienda.prenotazione');
    }

    
    /**
     * Show the Azienda modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('azienda.modifica');
    }
}
