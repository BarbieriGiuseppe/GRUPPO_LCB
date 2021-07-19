<?php

namespace App\Http\Controllers\Azienda;

use App\Http\Controllers\Controller;
use App\Models\Azienda;
use App\Controllers\Azienda\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Azienda\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfAzienda;
use app\Http\Middleware\RedirectIfNotAzienda;
use \PDF;

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

        $id = Auth::guard('azienda')->user()->id;
        $data = DB::select('select * from prenotazione_datore where emaildatore = (select email from aziendas where id = ?)' , [$id]);

        $dipendente = 'dipendente';

        return view('azienda/home',['data'=>$data,'dipendente'=>$dipendente]);

    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_datore where id = ?', [$id]);
        return redirect('azienda/home');
    }
  

    public function infoTamponato($cf,$ruolo) {

            $data = DB::table("dipendente")
                    ->where("codicefiscaledipendente", "=", $cf)
                    ->get(); 

        return view('infoTamponato',['ruolo'=>$ruolo,'data'=>$data]);
    }



    public function infoLaboratorio($clp) {

        $data = DB::table("laboratorios")
                ->where("codicelabpubblico", "=", $clp )
                ->get();

        return view('infoLaboratorio',['data'=>$data]);
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
