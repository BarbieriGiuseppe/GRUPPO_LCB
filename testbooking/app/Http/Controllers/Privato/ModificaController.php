<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Controllers\Privato\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use App\Http\Middleware\RedirectIfPrivato;
use App\Http\Middleware\RedirectIfNotPrivato;

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
        return view('privato/modifica');
    }

    public  function updateAnagrafica(Request $request)
    {   

        $privato = Privato::where('codicefiscale',$request->codicefiscale)->first();

        $privato->codicefiscale = $request['codicefiscale'];
        $privato->cognome = $request['cognome'];
        $privato->nome = $request['nome'];
        $privato->telefono= $request['telefono'];
        $privato->datanascita= $request['datanascita'];
        $privato->luogonascita = $request['luogonascita'];
        $privato->residenza = $request['residenza'];
        $privato->citta = $request['citta'];
        $privato->provincia = $request['provincia'];
        $privato->cap = $request['cap'];
        $privato->nazione = $request['nazione'];
        $privato->email = $request['email'];
        //$privato->password = $request['password'];
        $privato->save();

 
       return redirect('privato/modifica')->with('succes','Dati Salvati');
    }
  
}
