<?php

namespace App\Http\Controllers\Azienda;

use App\Http\Controllers\Controller;
use App\Models\Azienda;
use App\Controllers\Azienda\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use App\Http\Middleware\RedirectIfAzienda;
use App\Http\Middleware\RedirectIfNotAzienda;

class ModificaController extends Controller
{

    public  function modificaAnagrafica()
    {              
        return view('azienda/modifica');
    }

    public  function updateAnagrafica(Request $request)
    {   

        $azienda = Azienda::where('codicefiscale',$request->codicefiscale)->first();

        $azienda->codicefiscale = $request['codicefiscale'];
        $azienda->cognome = $request['cognome'];
        $azienda->nome = $request['nome'];
        $azienda->telefono= $request['telefono'];
        $azienda->datanascita= $request['datanascita'];
        $azienda->luogonascita = $request['luogonascita'];
        $azienda->residenza = $request['residenza'];
        $azienda->citta = $request['citta'];
        $azienda->provincia = $request['provincia'];
        $azienda->cap = $request['cap'];
        $azienda->nazione = $request['nazione'];
        $azienda->email = $request['email'];
        //$azienda->password = $request['password'];
        $azienda->ragionesociale = $request['ragionesociale'];
        $azienda->partitaiva = $request['partitaiva'];
        $azienda->indirizzoazienda = $request['indirizzoazienda'];
        $azienda->cittaazienda = $request['cittaazienda'];
        $azienda->provinciaazienda = $request['provinciaazienda'];

        $azienda->save();

 
       return redirect('azienda/modifica')->with('succes','Dati Salvati');
    }
  
}
