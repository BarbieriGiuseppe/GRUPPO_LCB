<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Controllers\Privato\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfPrivato;
use app\Http\Middleware\RedirectIfNotPrivato;

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
//
    public function mostraPrenotazioni()
    { 
        $id = Auth::guard('privato')->user()->id;
        $data = DB::select('select * from prenotazione_privato where emailprivato = (select email from privatos where id = ?)' , [$id]); //Aggiungere!--> where emailprivato = (select email from privatos where id = ?) , [$id]
        return view('privato/home',['data'=>$data]);
    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_privato where id = ?', [$id]);
        return redirect('privato/home');
    }
    
    public  function mostraAnagrafica()
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $data = DB::select('select * from privatos');              
        return view('privato/modifica',['data'=>$data,'id'=>$id]);
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
        $email =  $request->input('email');
        $password = $request->input('password');

        DB::update('update privatos set codicefiscale = ? ,
        cognome = ?, nome = ? ,telefono = ? ,datanascita = ? ,
        luogonascita = ? ,residenza = ? ,citta = ? ,provincia = ? ,
        cap = ? ,nazione = ? ,email = ? ,password = ?  where id = ?',
        [ $codicefiscale ,$cognome , $nome ,$telefono ,$datanascita ,$luogonascita ,
        $residenza ,$citta ,$provincia ,$cap ,$nazione ,$email  ,$password ,$id]);
        
        return redirect('privato/modifica')->with('succes','Data Updated');
    }
  
}
