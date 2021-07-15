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

    public function preventivo(){
        return view('privato.preventivo');
    }

    public function riepilogo(){
        return view('privato.riepilogo');
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
    
    /*public  function Profilo()
    {                 
        return view('privato/modifica');
    }*/

    public  function mostraProfilo()
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $data = DB::select('select * from privatos');               
        return view('privato/modifica',['data'=>$data,'id'=>$id]);
    }


    public  function modificaAnagrafica($id)
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $user = DB::select('select * from privatos');              
        return view('privato/editanagrafica',['user'=>$user,'id'=>$id]);
    }

    public  function updateAnagrafica($id)
    {   

        /*$codicefiscale = $req->input('codicefiscale');
        $cognome = $req->input('cognome');
        $nome = $req->input('nome');
        $telefono = $req->input('telefono');
        $datanascita = $req->input('datanascita');
        $luogonascita = $req->input('luogonascita');
        $residenza = $req->input('residenza');
        $citta = $req->input('citta');
        $provincia = $req->input('provincia');
        $cap =$req->input('cap');
        $nazione = $req->input('nazione');
        $email = $req->input('email');
        $password =$req->input('password');


        DB::update('update privatos set codicefiscale = ? ,
        cognome = ?, nome = ? ,telefono = ? ,datanascita = ? ,
        luogonascita = ? ,residenza = ? ,citta = ? ,provincia = ? ,
        cap = ? ,nazione = ? ,email = ? ,password = ?  where id = ?',
        [ $codicefiscale ,$cognome , $nome ,$telefono ,$datanascita ,$luogonascita ,
        $residenza ,$citta ,$provincia ,$cap ,$nazione ,$email  ,$password ,$id]);*/


        echo "proba";
        return "ciao";
        
        //return redirect('privato/modifica');
    }
  
}
