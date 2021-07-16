<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Models\Tamponato_Privato;
use App\Models\Prenotazione_Privato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Auth;

class PreventivoController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'codicefiscaletamponato' => ['required', 'string', 'max:16'],
            'codicelabpubblico' => ['required', 'string', 'max:255'],
            'emailprivato' => ['required', 'string', 'max:255'],
            'datatampone' => ['required', 'date', 'max:255'],
            'orario' => ['required', 'date_format:h:i', 'max:255'],
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
        return Prenotazione_Privato::create([
            'codicefiscaletamponato' => $data['codicefiscaletamponato'],
            'codicelabpubblico' => $data['codicelabpubblico'],
            'emailprivato' => $data['emailprivato'],
            'datatampone' => $data['datatampone'],
            'orario' => $data['orario'],
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
    public function showPreventivoForm()
    {
        return view('privato.preventivo');
    }

    public function registerPreventivo(Request $request){
        $preventivo = new Prenotazione_Privato();
        $preventivo->codicefiscaletamponato = $request->codicefiscaletamponato;
        $preventivo->codicelabpubblico = $request->codicelabpubblico;
        $preventivo->emailprivato = $request->emailprivato;
        $preventivo->datatampone = $request->datatampone;
        $preventivo->orario = $request->orario;
        $preventivo->tipologia = $request->tipologia;
        $preventivo->metodopagamento = $request->metodopagamento;
        $preventivo->pagato = $request->pagato;
        $preventivo->esito = $request->esito;
     
        $preventivo->save();
        $preventivo->email = $request->email;
        
     
        return redirect('privato/riepilogo');


        /*->with(['codicefiscaletamponato'=>$request->codicefiscaletamponato
        ,'codicelabpubblico'=>$request->codicelabpubblico
        ,'emailprivato'=>$request->emailprivato
        ,'email'=>$request->email
        ,'datatampone'=>$request->datatampone
        ,'orario'=>$request->orario
        ,'tipologia'=>$request->tipologia]);*/
    }

}
