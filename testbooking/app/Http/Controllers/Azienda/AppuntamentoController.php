<?php

namespace App\Http\Controllers\Azienda;

use App\Http\Controllers\Controller;
use App\Models\Prenotazione_Datore;
use App\Models\Dipendente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Auth;

class AppuntamentoController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'codicefiscaledipendente' => ['required', 'string', 'max:16'],
            'codicelabpubblico' => ['required', 'string', 'max:255'],
            'emaildatore' => ['required', 'string', 'max:255'],
            'datatampone' => ['required', 'date', 'max:255'],
            'orario' => ['required', 'date_format:h:i', 'max:255'],
            'prezzo' => [ 'string', 'max:255'],
            'tipologia' => ['required', 'string', 'max:255'],
            'datanascita' => ['required', 'date', 'max:255'],
            'metodopagamento' => ['required', 'string', 'max:255'],
            'pagato' => ['required', 'string', 'max:255'],
            'esito' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new privato instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Privato
     */
    protected function create(array $data)
    {
        return Prenotazione_Datore::create([
            'codicefiscaledipendente' => $data['codicefiscaledipendente'],
            'codicelabpubblico' => $data['codicelabpubblico'],
            'emaildatore' => $data['emaildatore'],
            'datatampone' => $data['datatampone'],
            'orario' => $data['orario'],
            'prezzo' => $data['prezzo'],
            'tipologia' => $data['tipologia'],
            'metodopagamento' => $data['metodopagamento'],
            'pagato' => $data['pagato'],
            'esito' => $data['esito'],

        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAppuntamentoForm()
    {
        return view('azienda.appuntamento');
    }

    public function registerAppuntamento(Request $request){
        $preventivo = new Prenotazione_Datore();
        $preventivo->codicefiscaledipendente = $request->codicefiscaledipendente;
        $preventivo->codicelabpubblico = $request->codicelabpubblico;
        $preventivo->emaildatore = $request->emaildatore;
        $preventivo->datatampone = $request->datatampone;
        $preventivo->orario = $request->orario;
        $preventivo->prezzo = $request->prezzo;
        $preventivo->tipologia = $request->tipologia;
        $preventivo->metodopagamento = $request->metodopagamento;
        $preventivo->pagato = $request->pagato;
        $preventivo->esito = $request->esito;
     
        $preventivo->save();
        $preventivo->email = $request->email;
        
     
        return redirect('azienda/riepilogo');


        /*->with(['codicefiscaletamponato'=>$request->codicefiscaletamponato
        ,'codicelabpubblico'=>$request->codicelabpubblico
        ,'emailprivato'=>$request->emailprivato
        ,'email'=>$request->email
        ,'datatampone'=>$request->datatampone
        ,'orario'=>$request->orario
        ,'tipologia'=>$request->tipologia]);*/
    }

}
