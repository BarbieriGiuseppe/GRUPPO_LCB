<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Azienda;
use App\Models\Privato;

use App\Controllers\Laboratorio\Auth\LoginController;
use Auth;
use Illuminate\Support\Facades\DB;
use app\Http\Middleware\RedirectIfLaboratorio;
use app\Http\Middleware\RedirectIfNotLaboratorio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('laboratorio.auth:laboratorio');
    }

    /**
     * Show the Laboratorio dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home() {
        return view('laboratorio.home');
    }

     /**
     * Show the Laboratorio prenotazione.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function prezzotampone() {
        return view('laboratorio.prezzotampone');
    }

    
    /**
     * Show the Laboratorio modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('laboratorio.modifica');
    }

    public function mostraPrenotazioni()
    { 
        $id = Auth::guard('laboratorio')->user()->id;
        $t_privati = DB::select('select * from prenotazione_privato where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)' , [$id]);
        $t_pazienti = DB::select('select * from prenotazione_medico where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)' , [$id]); 
        $t_dipendenti = DB::select('select * from prenotazione_datore where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)' , [$id]); 

        return view('laboratorio/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti]);
    }


  
}
