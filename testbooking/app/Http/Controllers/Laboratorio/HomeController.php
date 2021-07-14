<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Controllers\Laboratorio\Auth\LoginController;
use App\Controllers\Laboratorio\Auth;
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
        $data = DB::select('select * from prenotazione_medico'); //Aggiungere!--> where emailprivato = (select email from privatos where id = ?)' , [$id])
        return view('laboratorio/home',['data'=>$data]);
    }
}
