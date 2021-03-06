<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Controllers\Privato\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfPrivato;
use app\Http\Middleware\RedirectIfNotPrivato;
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

        $tamponato_privato = 'tamponato_privato';

        return view('privato/home',['data'=>$data,'tamponato_privato'=>$tamponato_privato]);
    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_privato where id = ?', [$id]);
        return redirect('privato/home');
    }
    
    
    public function infoTamponato($cf,$ruolo) {

            $data = DB::table("tamponato_privato")
                    ->where("codicefiscaletamponato", "=", $cf)
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
