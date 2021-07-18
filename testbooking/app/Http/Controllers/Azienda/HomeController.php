<?php

namespace App\Http\Controllers\Azienda;

use App\Http\Controllers\Controller;
use App\Models\Azienda;
use App\Controllers\Azienda\Auth\LoginController;
use App\Controllers\Azienda\Auth;
use Illuminate\Support\Facades\DB;
use app\Http\Middleware\RedirectIfAzienda;
use app\Http\Middleware\RedirectIfNotAzienda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('azienda.auth:azienda');
    }

    /**
     * Show the Azienda dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home() {
        return view('azienda.home');
    }

     /**
     * Show the Azienda prenotazione.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function prenotazione() {
        return view('azienda.prenotazione');
    }

    
    /**
     * Show the Azienda modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('azienda.modifica');
    }

    public function mostraPrenotazioni()
    { 
        $data = DB::select('select * from prenotazione_datore'); //Aggiungere!--> where emailprivato = (select email from privatos where id = ?)' , [$id])
        return view('azienda/home',['data'=>$data]);
    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_datore where id = ?', [$id]);
        return redirect('azienda/home');
    }
  
    
    public  function downloadGuida()
    {   

        $file = public_path()."/guida_tampone.pdf";
        $header = array('Content-Type: application/pdf',);
        return response()->download($file, 'guida_tampone.pdf', $header);
    }


    public  function downloadQuestionario()
    {
        $file = public_path()."/questionario_anamnesi.pdf";
        $header = array('Content-Type: application/pdf',);
        return response()->download($file, 'questionario_anamnesi.pdf', $header);
    }
}
