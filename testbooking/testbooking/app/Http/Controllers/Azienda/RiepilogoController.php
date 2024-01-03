<?php

namespace App\Http\Controllers\Azienda;

use App\Http\Controllers\Controller;
use App\Models\Azienda;
use App\Models\Dipendente;
use App\Models\Prenotazione_Datore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Azienda\Auth;

class RiepilogoController extends Controller
{

    public function showAggiornaForm()
    {
        return view('azienda.riepilogo');
    }

    public function registerRiepilogo(Request $request)
    {

        $prenotazione = Prenotazione_Datore::where('codicefiscaledipendente',$request->codicefiscaledipendente)->first();

        $prenotazione->metodopagamento = $request['metodopagamento'];
        $prenotazione->prezzo = $request['prezzo'];
        $prenotazione->save();

       

        return redirect('azienda/continua');
    

    }

}

        
   

