<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Azienda;
use App\Models\Privato;
use App\Models\Prezzo_tampone;
use App\Controllers\Laboratorio\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\DB;
use app\Http\Middleware\RedirectIfLaboratorio;
use app\Http\Middleware\RedirectIfNotLaboratorio;


class PrezzoTamponiController extends Controller
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
            'tipologia' =>['required','string'],
             'codicelabpub' =>['required','string'],
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
            'codicelabpub' => $data['codicelabpub'],
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
        $id = Auth::guard('laboratorio')->user()->id;
        $prezzi = DB::select('select * from prezzo_tampone where codicelabpub = (select codicelabpubblico from laboratorios where id = ? )', [$id]);
        return view('laboratorio.prezzotamponi',['prezzi'=>$prezzi]);
    }

    public function savePrezzoTampone(Request $request){

       

        $prezzotampone = new Prezzo_Tampone();
        $prezzotampone->tipologia = $request->tipologia;
        $prezzotampone->codicelabpub = $request->codicelabpub;
        $prezzotampone->prezzo = $request->prezzo;
        $prezzotampone->save();


        return redirect('laboratorio/prezzotamponi');


    }

 
}
