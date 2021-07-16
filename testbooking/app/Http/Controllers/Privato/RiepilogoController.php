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
 
       /* //Find the user object from model if it exists
        $prenotazione= Prenotazione_Privato::latest()->get();

        //$request contain your post data sent from your edit from
        //$user is an object which contains the column names of your table

        //Set user object attributes

        $prenotazione->codicefiscaletamponato = $request['codicefiscaletamponato'];
        $prenotazione->codicelabpubblico = $request['codicelabpubblico'];
        $prenotazione->emailprivato = $request['emailprivato'];
        $prenotazione->datatampone = $request['datatampone'];
        $prenotazione->orario = $request['orario'];
        $prenotazione->prezzo = $request['prezzo'];
        $prenotazione->tipologia = $request['tipologia'];
        $prenotazione->metodopagamento = $request['metodopagamento'];
        $prenotazione->pagato = $request['pagato'];
        $prenotazione->esito = $request['esito'];

        // Save/update user. 
        // This will will update your the row in ur db.
        $prenotazione->save();

        return redirect('privato/riepilogo');*/

      /*  $flight = App\Flight::updateOrCreate(
            ['departure' => 'Oakland', 'destination' => 'San Diego'],
            ['price' => 99]
        );*/

       /* $prenotazione = Prenotazione_Privato::where('id','=', $request->id)
                             ->update([
                                     'metodopagamento' => $request->metodopagamento,
                                     'prezzo' => $request->prezzo
                               ]);
                               return redirect('privato/riepilogo');*/
    /*<?php

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
       
        //Find the user object from model if it exists
         
        $prenotazione= Prenotazione_Privato::latest($request->id);

        //$user is an object which contains the column names of your table

        //Set user object attributes
        $prenotazione->codicefiscaletamponato = $request->codicefiscaletamponato;
        $prenotazione->codicelabpubblico = $request->codicelabpubblico;
        $prenotazione->emailprivato = $request->emailprivato;
        $prenotazione->datatampone = $request->datatampone;
        $prenotazione->orario = $request->orario;
        $prenotazione->prezzo = $request->prezzo;
        $prenotazione->tipologia = $request->tipologia;
        $prenotazione->metodopagamento = $request->metodopagamento;
        $prenotazione->pagato = $request->pagato;
        $prenotazione->esito = $request->esito;

        // Save/update user. 
        // This will will update your the row in ur db.
       

        return redirect('privato/riepilogo');
    

        }
    public  function cancellaPrenotazione()
    {
       
        DB::delete('delete from prenotazione_privato where id = ?', [$id]);
        return redirect('privato/riepilogo');
    }
}*/

        }
   
}
