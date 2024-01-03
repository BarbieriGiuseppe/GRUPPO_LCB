<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Controllers\Medico\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Medico\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfMedico;
use app\Http\Middleware\RedirectIfNotMedico;
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
    public function tamponato() {
        return view('medico.tamponato');
    }

    public function appuntamento(){
        return view('medico.appuntamento');
    }

    public function riepilogo(){
        return view('medico.riepilogo');
    }

    public function continua(){
        return view('medico.continua');
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
        $id = Auth::guard('medico')->user()->id;
        $data = DB::select('select * from prenotazione_medico where emailmedico = (select email from medicos where id = ?)' , [$id]);

        $paziente = 'paziente';

        return view('medico/home',['data'=>$data,'paziente'=>$paziente]);
    }

    public  function cancellaPrenotazione($id)
    {
        DB::delete('delete from prenotazione_medico where id = ?', [$id]);
        return redirect('medico/home');
    }
    

    public function infoTamponato($cf,$ruolo) {

            $data = DB::table("paziente")
                    ->where("codicefiscalepaziente", "=", $cf)
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
