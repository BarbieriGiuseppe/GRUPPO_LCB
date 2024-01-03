<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Paziente;
use App\Models\Prenotazione_Medico;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Medico\Auth;

class RiepilogoController extends Controller
{

    public function showAggiornaForm()
    {
        return view('medico.riepilogo');
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

        
   

