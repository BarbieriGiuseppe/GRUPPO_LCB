<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Controllers\Medico\Auth\LoginController;
use App\Controllers\Medico\Auth;
use Illuminate\Support\Facades\DB;
use app\Http\Middleware\RedirectIfMedico;
use app\Http\Middleware\RedirectIfNotMedico;

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
    public function home() {
        return view('medico.home');
    }


     /**
     * Show the Medico prenotazione.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function prenotazione() {
        return view('medico.prenotazione');
    }

    
    /**
     * Show the Medico modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('medico.modifica');
    }

    public function mostraPrenotazioni()
    { 
        $data = DB::select('select * from prenotazione_medico'); //Aggiungere!--> where emailprivato = (select email from privatos where id = ?)' , [$id])
        return view('medico/home',['data'=>$data]);
    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_medico where id = ?', [$id]);
        return redirect('medico/home');
    }
    
    public  function mostraAnagrafica(/*$id*/)
    {   
        
        $data = DB::select('select * from medicos');       //where id = ?',[$id]
        return view('medico/modifica',['data'=>$data]);
    }

    public  function modificaAnagrafica(Request $request,$id)
    {   
        $codicefiscale = $request->input('codicefiscale');
        $cognome = $request->input('cognome');
        $nome = $request->input('nome');
        $telefono = $request->input('telefono');
        $datanascita = $request->input('datanascita');
        $luogonascita = $request->input('luogonascita');
        $residenza= $request->input('residenza');
        $citta = $request->input('citta');
        $provincia = $request->input('provincia');
        $cap = $request->input('cap');
        $nazione = $request->input('nazione');
        $nomestudiomedico = $request->input('nomestudiomedico');
        $partitaiva = $request->input('partitaiva');
        $cittastudio = $request->input('cittastudio');
        $indirizzostudio = $request->input('indirizzostudio');
        $provinciastudio = $request->input('provinciastudio');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::update('update medicos set codicefiscale = ? ,
        cognome = ? nome = ? ,telefono = ? ,datanascita = ? ,
        luogonascita = ? ,residenza = ? ,citta = ? ,provincia = ? ,
        cap = ? ,nazione = ? ,nomestudiomedico = ?,partitaiva = ?,
        cittastudio = ?,indirizzostudio = ?,provinciastudio = ?,
        email = ? ,password = ?,  where id = ?',
        [ $codicefiscale ,$cognome , $nome ,$telefono ,$datanascita ,$luogonascita ,
        $residenza ,$citta ,$provincia ,$cap ,$nazione ,$nomestudiomedico,$partitaiva,
        $cittastudio,$indirizzostudio, $provinciastudio,$email  ,$password ,$id]);

        return redirect('medico/modifica')->with('succes','Data Updated');
    }
}
