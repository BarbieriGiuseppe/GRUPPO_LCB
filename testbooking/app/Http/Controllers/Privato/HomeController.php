<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Controllers\Privato\Auth\LoginController;
use Illuminate\Support\Facades\DB;
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
        $data= DB::select('select * from prenotazione_privato'); //Attenzione!--> where Privato is unique
        return view('privato/home',['data'=>$data]);
    }

    public  function cancella($id)
    {
        DB::delete('delete from prenotazione_privato where id = ?', [$id]);
        return redirect('privato/home');
    }
    
  
  
    
}
