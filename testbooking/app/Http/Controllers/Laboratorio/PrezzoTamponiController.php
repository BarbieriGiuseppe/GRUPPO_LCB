<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Models\Tamponato_Privato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Auth;


class PrenotazioneController extends Controller
{
   
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'prezzo' => ['required', 'string', 'max:16'],
          
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
        return Prezzo_Tampone::create([
            'tipologia' => $data['tipologia'],
            'codicelabpubblico' => $data['codicelabpubblico'],
            'prezzo' => $data['prezzo'],            
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPrezzoTamponiForm()
    {
        $codice = Auth::guard('laboratorio')->user()->codicelabpubblico;
        return view('laboratorio/prezzotamponi',['codice'=>$codice]);
    }

    public function registerPrezzoTampone($tipologia,$codicelabpubblico,Request $request){
        $prezzotampone = new Prezzo_Tampone();
        $prezzotampone->tipologia = $tipologia;
        $prezzotampone->codicelabpubblico = $codicelabpubblico;
        $prezzotampone->prezzo = $request->prezzo;
        $prezzotampone->save();


        return redirect('laboratorio/prezzotamponi');
    }

 
}
