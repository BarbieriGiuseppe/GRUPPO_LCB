<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Controllers\Medico\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use App\Http\Middleware\RedirectIfMedico;
use App\Http\Middleware\RedirectIfNotMedico;

class ModificaController extends Controller
{
   /* public  function mostraProfilo()
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $data = DB::select('select * from privatos');               
        return view('privato/modifica',['data'=>$data,'id'=>$id]);
    }
    */

    public  function modificaAnagrafica()
    {              
        return view('medico/modifica');
    }

    public  function updateAnagrafica(Request $request)
    {   

        $medico = Medico::where('codicefiscale',$request->codicefiscale)->first();

        $medico->codicefiscale = $request['codicefiscale'];
        $medico->cognome = $request['cognome'];
        $medico->nome = $request['nome'];
        $medico->telefono= $request['telefono'];
        $medico->datanascita= $request['datanascita'];
        $medico->luogonascita = $request['luogonascita'];
        $medico->residenza = $request['residenza'];
        $medico->citta = $request['citta'];
        $medico->provincia = $request['provincia'];
        $medico->cap = $request['cap'];
        $medico->nazione = $request['nazione'];
        $medico->email = $request['email'];
        //$medico->password = $request['password'];
        $medico->nomestudiomedico = $request['nomestudiomedico'];
        $medico->partitaiva = $request['partitaiva'];
        $medico->indirizzostudio = $request['indirizzostudio'];
        $medico->cittastudio = $request['cittastudio'];
        $medico->provinciastudio = $request['provinciastudio'];
    
        
        $medico->save();

 
       return redirect('medico/modifica')->with('succes','Dati Salvati');
    }
  
}
