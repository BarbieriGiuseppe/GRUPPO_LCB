<?php

namespace App\Http\Controllers\Asl;

use App\Http\Controllers\Controller;
use App\Models\Asl;
use Auth;
use App\Controllers\Asl\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfAsl;
use app\Http\Middleware\RedirectIfNotAsl;
use DB;
use App\Models\Prenotazione_Privato;
use DataTables;



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

    public function tabellaprivati() {
        return view('asl.tabellaprivati');
    }

    public function tabelladipendenti() {
        return view('asl.tabelladipendenti');
    }

    public function tabellaassistiti() {
        return view('asl.tabellaassistiti');
    }
/*
    
    public function mostraPrenotazioni()
    { 
        $id = Auth::guard('asl')->user()->id;
        $t_privati = DB::select('select * from prenotazione_privato where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]);
        $t_pazienti = DB::select('select * from prenotazione_medico where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]); 
        $t_dipendenti = DB::select('select * from prenotazione_datore where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ? and esito like "Positivo" or esito like "Negativo")' , [$id]); 
       
        return view('asl/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti]);
    }
*/
/*
    public function mostraNumeroTamponi()
    { 
        $id = Auth::guard('asl')->user()->id;
        $t_privati = DB::select('select * from prenotazione_privato where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]);
        $n_privati = $t_privati->count();
        $t_pazienti = DB::select('select * from prenotazione_medico where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]); 
        $n_pazienti = $t_pazienti->count();
        $t_dipendenti = DB::select('select * from prenotazione_datore where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?) and esito like "Positivo" or esito like "Negativo"' , [$id]); 
        $n_dipendenti = $t_dipendenti->count();

            

        return view('asl/home')->compact('n_privati','n_pazienti','n_dipendenti');
    }
*/
/*
    public function visualizzaPositivi()
    { 
        $id = Auth::guard('asl')->user()->id;
        $t_privati = DB::select('select * from prenotazione_privato where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" ' , [$id]);
        $t_pazienti = DB::select('select * from prenotazione_medico where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" ' , [$id]); 
        $t_dipendenti = DB::select('select * from prenotazione_datore where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?) and esito like "Positivo"' , [$id]); 
        $lab = DB::select('select * from laboratorios where provincia = (select provincia from asls where id = ?) and esito like "Positivo"' , [$id]); 
        return view('asl/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti,'lab'=>$lab]);
    }
*/
/*
    public function visualizzaPositiviNegativi()
    { 
        $id = Auth::guard('asl')->user()->id;
        $t_privati = DB::select('select * from prenotazione_privato where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]);
        $t_pazienti = DB::select('select * from prenotazione_medico where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)and esito like "Positivo" or esito like "Negativo"' , [$id]); 
        $t_dipendenti = DB::select('select * from prenotazione_datore where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ? and esito like "Positivo" or esito like "Negativo")' , [$id]); 
       
        return view('asl/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti]);
    }
    */

}
