<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use App\Models\Laboratorio;
use App\Controllers\Laboratorio\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use App\Http\Middleware\RedirectIfLaboratorio;
use App\Http\Middleware\RedirectIfNotLaboratorio;

class ModificaController extends Controller
{

    public  function modificaAnagrafica()
    {              
        return view('laboratorio/modifica');
    }

    public  function updateAnagrafica(Request $request)
    {   

        $laboratorio = Laboratorio::where('codicelabpubblico',$request->codicelabpubblico)->first();

        $laboratorio->nomelaboratorio = $request['nomelaboratorio'];
        $laboratorio->codicelabpubblico = $request['codicelabpubblico'];
        $laboratorio->telefono= $request['telefono'];
        $laboratorio->indirizzo = $request['indirizzo'];
        $laboratorio->citta = $request['citta'];
        $laboratorio->provincia = $request['provincia'];
        $laboratorio->cap = $request['cap'];
        $laboratorio->email = $request['email'];
        //$laboratorio->password = $request['password'];

        $laboratorio->save();

 
       return redirect('laboratorio/modifica')->with('succes','Dati Salvati');
    }
  
}
