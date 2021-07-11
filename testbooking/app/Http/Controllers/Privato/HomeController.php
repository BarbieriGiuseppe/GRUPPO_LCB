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
    public function home() {
        return view('privato.home');
    }

     /**
     * Show the Privato prenotazione.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function prenotazione() {
        return view('privato.prenotazione');
    }

    
    /**
     * Show the Privato modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('privato.modifica');
    }

    
  
    
}
