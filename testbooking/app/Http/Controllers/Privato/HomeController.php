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
    public function tamponato() {
        return view('privato.tamponato');
    }

    public function appuntamento(){
        return view('privato.appuntamento');
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
        $data = DB::select('select * from prenotazione_privato where emailprivato = (select email from privatos where id = ?)' , [$id]); 
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

  
}
