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
    public function prezzotamponi() {
        return view('laboratorio.prezzotamponi');
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




    public  function modificaEsitoPrivato($id)
    {   
        $e_privato = DB::select('select * from prenotazione_privato where id = ?' , [$id]);              
        return view('laboratorio/esito',['e_privato'=>$e_privato]);
    }

    public  function modificaEsitoPaziente($id)
    {   
        $e_paziente = DB::select('select * from prenotazione_medico where id = ?' , [$id]);              
        return view('laboratorio/esito',['e_paziente'=>$e_paziente]);
    }

    public  function modificaEsitoDipendente($id)
    {   
        $e_dipendente = DB::select('select * from prenotazione_datore where id = ?' , [$id]);              
        return view('laboratorio/esito',['e_dipendente'=>$e_dipendente]);
    }




    public  function updateEsitoPrivato(Request $req,$id)
    {   

        $esito = $req-> input('esito');;
    
        DB::update('update prenotazione_privato set esito = ? where id = ?',
        [$esito ,$id]);
        
        return redirect('laboratorio/home');
    }

    public  function updateEsitoPaziente(Request $req,$id)
    {   

        $esito = $req-> input('esito');


        DB::update('update prenotazione_medico set esito = ? where id = ?',
        [$esito ,$id]);
        
        return redirect('laboratorio/home');
    }

    public  function updateEsitoDipendente(Request $req,$id)
    {   

        $esito = $req-> input('esito');;


        DB::update('update prenotazione_datore set esito = ? where id = ?',
        [ $esito ,$id]);
        
        return redirect('laboratorio/home');
    }

  
}
