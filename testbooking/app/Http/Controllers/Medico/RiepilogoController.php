<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Models\Tamponato_Privato;
use App\Models\Prenotazione_Privato;
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

        $prenotazione = Prenotazione_Privato::where('codicefiscaletamponato',$request->codicefiscaletamponato)->first();

        $prenotazione->metodopagamento = $request['metodopagamento'];
        $prenotazione->prezzo = $request['prezzo'];
        $prenotazione->save();

       

        return redirect('privato/home');
    

    }

}

        
   

