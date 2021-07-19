<?php

namespace App\Http\Controllers\Asl;

use App\Http\Controllers\Controller;
use App\Models\Asl;
use Auth;
use App\Controllers\Asl\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfAsl;
use app\Http\Middleware\RedirectIfNotAsl;
use DB;
use App\Models\Prenotazione_Privato;
use DataTables;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('asl.auth:asl');
    }

    /**
     * Show the Asl dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home() {
        return view('asl.home');
    }
    
    /**
     * Show the Asl modifica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function modifica() {
        return view('asl.modifica');
    }

    public function tabellaprivati() {
        return view('asl.tabellaprivati');
    }

    public function tabelladipendenti() {
        return view('asl.tabelladipendenti');
    }

    public function tabellaassistiti() {
        return view('asl.tabellaassistiti');
    }

    
    public function mostraPrenotazioni()
    { 
               
        $t_privati= DB::table("prenotazione_privato")
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();

        $t_pazienti = DB::table("prenotazione_medico")
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();
        
        $t_dipendenti = DB::table("prenotazione_datore")
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();

        $n_privati = $t_privati->count();
        $n_pazienti = $t_pazienti->count();
        $n_dipendenti = $t_dipendenti->count();
        $n_tamponi = $n_privati + $n_pazienti + $n_dipendenti;


        $tp_privati= DB::table("prenotazione_privato")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();

        $tp_pazienti = DB::table("prenotazione_medico")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();
        
        $tp_dipendenti = DB::table("prenotazione_datore")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();
        

        $np_privati = $tp_privati->count();
        $np_pazienti = $tp_pazienti->count();
        $np_dipendenti = $tp_dipendenti->count();
        $np_tamponi = $np_privati + $np_pazienti + $np_dipendenti;

        $tasso = ($np_tamponi*100)/$n_tamponi;

        $laboratori = DB::table("laboratorios")
                    ->get();

        $tamponato_privato = 'tamponato_privato';
        $paziente = 'paziente';
        $dipendente = 'dipendente';

        $configurazione = 'principale';

        return view('asl/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti,'n_tamponi'=>$n_tamponi,'np_tamponi'=>$np_tamponi,'tasso'=>$tasso,'tamponato_privato'=>$tamponato_privato,'paziente'=>$paziente,'dipendente'=>$dipendente,'laboratori'=>$laboratori,'configurazione'=>$configurazione]);
    }




    public function mostraPositivi()
    { 


        $tp_privati= DB::table("prenotazione_privato")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();

        $tp_pazienti = DB::table("prenotazione_medico")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();
        
        $tp_dipendenti = DB::table("prenotazione_datore")
                    ->where("esito", "=", 'Positivo')
                    ->where("codicelabpubblico", "=", function($query){
                     $provincia = Auth::guard('asl')->user()->provincia;
	                 $query->from("laboratorios")
	                ->select("codicelabpubblico")
	                ->where("provincia", "=", $provincia);
                    })
                    ->get();

        $tamponato_privato = 'tamponato_privato';
        $paziente = 'paziente';
        $dipendente = 'dipendente';

        $configurazione = 'positivi';

        return view('asl/home',['tp_privati'=>$tp_privati,'tp_pazienti'=>$tp_pazienti,'tp_dipendenti'=>$tp_dipendenti,'tamponato_privato'=>$tamponato_privato,'paziente'=>$paziente,'dipendente'=>$dipendente,'configurazione'=>$configurazione]);
    }



    public function mostraFiltri(Request $request)
    { 
        $input_lab = $request['laboratorio'];
        $input_data = $request['data'];
        $input_ora = $request['ora'];


        if(empty($input_lab) && empty($input_data) && empty($input_ora)  ){

            $t_privati= DB::table("prenotazione_privato")
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
        
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
        

        }else if(!empty($input_lab) && !empty($input_data) && !empty($input_ora)){
        
            $t_privati= DB::table("prenotazione_privato")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();
            

        }else if(!empty($input_lab) && empty($input_data) && empty($input_ora)){                

            $t_privati= DB::table("prenotazione_privato")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();
        

        }else if(empty($input_lab) && !empty($input_data) && empty($input_ora)){

            $t_privati= DB::table("prenotazione_privato")
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
        
        }else if(empty($input_lab) && empty($input_data) && !empty($input_ora)){

            $t_privati= DB::table("prenotazione_privato")
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();


        }else if(!empty($input_lab) && !empty($input_data) && empty($input_ora)){     
        
            $t_privati= DB::table("prenotazione_privato")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("datatampone", "=", $input_data)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();
            

        }else if(empty($input_lab) && !empty($input_data) && !empty($input_ora)){   

            $t_privati= DB::table("prenotazione_privato")
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("datatampone", "=", $input_data)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();

            
        }else if(!empty($input_lab) && empty($input_data) && !empty($input_ora)){ 

            $t_privati= DB::table("prenotazione_privato")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();

            $t_pazienti = DB::table("prenotazione_medico")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
	                    $query->from("laboratorios")
	                    ->select("codicelabpubblico")
	                    ->where("provincia", "=", $provincia);
                        })
                        ->get();
            
            $t_dipendenti = DB::table("prenotazione_datore")
                        ->where("codicelabpubblico", "=", $input_lab)
                        ->where("orario", "=", $input_ora)
                        ->where("codicelabpubblico", "=", function($query){
                        $provincia = Auth::guard('asl')->user()->provincia;
                        $query->from("laboratorios")
                        ->select("codicelabpubblico")
                        ->where("provincia", "=", $provincia);
                        })
                        ->get();

        }


        $tamponato_privato = 'tamponato_privato';
        $paziente = 'paziente';
        $dipendente = 'dipendente';


        $configurazione = 'filtri';

        return view('asl/home',['t_privati'=>$t_privati,'t_pazienti'=>$t_pazienti,'t_dipendenti'=>$t_dipendenti,'tamponato_privato'=>$tamponato_privato,'paziente'=>$paziente,'dipendente'=>$dipendente,'configurazione'=>$configurazione]);
    }



    public function infoTamponato($cf,$ruolo) {

        if($ruolo == 'tamponato_privato'){

            $data = DB::table("tamponato_privato")
                    ->where("codicefiscaletamponato", "=", $cf)
                    ->get();

        }else if ($ruolo == 'paziente'){

            $data = DB::table("paziente")
                    ->where("codicefiscalepaziente", "=", $cf)
                    ->get();

        }else if ($ruolo == 'dipendente'){

            $data = DB::table("dipendente")
                    ->where("codicefiscaledipendente", "=", $cf)
                    ->get(); 
        }

        return view('infoTamponato',['ruolo'=>$ruolo,'data'=>$data]);
    }



    public function infoLaboratorio($clp) {

        $data = DB::table("laboratorios")
                ->where("codicelabpubblico", "=", $clp )
                ->get();

        return view('infoLaboratorio',['data'=>$data]);
    }

}
