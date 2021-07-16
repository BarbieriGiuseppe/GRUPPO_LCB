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
    
    
}
