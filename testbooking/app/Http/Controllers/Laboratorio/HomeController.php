<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Azienda;
use App\Models\Privato;
use App\Models\Prenotazione_Datore;
use App\Models\Prenotazione_Privato;
use App\Models\Prenotazione_Medico;
use App\Controllers\Laboratorio\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
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



    public  function updateEsitoPrivato(Request $request)
    {   
        

        $prenotazioneprivato = Prenotazione_Privato::where('id',$request->id)->first();

        $prenotazioneprivato->esito = $request['esito'];
       
        $prenotazioneprivato->save();

        return redirect('laboratorio/home')->with('succes','Dati Salvati');
       
    }

    public  function updateEsitoPaziente(Request $request)
    {   

        $prenotazionemedico = Prenotazione_Medico::where('id',$request->id);

        $prenotazionemedico->esito = $request['esito'];
       
        $prenotazionemedico->save();

        return redirect('laboratorio/home')->with('succes','Dati Salvati');

    }

    public  function updateEsitoDipendente(Request $request)
    {   

        $prenotazionedatore = Prenotazione_Datore::where('id',$request->id)->first();

        $prenotazionedatore->esito = $request['esito'];
       
        $prenotazionedatore->save();

        return redirect('laboratorio/home')->with('succes','Dati Salvati');
    }

  
}
