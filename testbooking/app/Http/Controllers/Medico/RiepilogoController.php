<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Models\Tamponato_Privato;
use App\Models\Prenotazione_Medico;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Auth;

class RiepilogoController extends Controller
{

    public function showAggiornaForm()
    {
        return view('privato.riepilogo');
    }

    public function registerRiepilogo(Request $request)
    {

        $prenotazione = Prenotazione_Medico::where('codicefiscalepaziente',$request->codicefiscalepaziente)->first();

        $prenotazione->metodopagamento = $request['metodopagamento'];
        $prenotazione->prezzo = $request['prezzo'];
        $prenotazione->save();

       

        return redirect('medico/continua');
    

    }

}

        
   

