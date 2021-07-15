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


    public function elencoLaboratori() {
        $data = DB::table('laboratorios')->get();
        return view('privato.preventivo')->with('data', $data);
    }


    public function elencoTipologie($codicelabpub){
         echo json_encode(DB::table('prezzo_tampone')->where('codicelabpub', $codicelabpub)->get());
    }
    
    
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

            'codicefiscaletamponato' => ['required', 'string', 'max:16'],
            'cognome' => ['required', 'string', 'max:255'],
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'luogonascita' => ['required', 'string', 'max:255'],
            'datanascita' => ['required', 'date', 'max:255'],
            'residenza' => ['required', 'string', 'max:255'],
            'citta' => ['required', 'string', 'max:255'],
            'provincia' => ['required', 'string', 'max:255'],
            'cap' => ['required', 'string', 'max:255'],
            'nazione' => ['required', 'string', 'max:255'],
            'emailprivato' => ['required', 'string', 'max:255'],
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
        return Tamponato_Privato::create([
            'codicefiscaletamponato' => $data['codicefiscaletamponato'],
            'cognome' => $data['cognome'],
            'nome' => $data['nome'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'luogonascita' => $data['luogonascita'],
            'datanascita' => $data['datanascita'],
            'residenza' => $data['residenza'],
            'citta' => $data['citta'],
            'provincia' => $data['provincia'],
            'cap' => $data['cap'],
            'nazione' => $data['nazione'],
            'emailprivato' => $data['emailprivato'],
            
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPrenotazioneForm()
    {
        return view('privato.prenotazione');
    }

    public function registerTamponato(Request $request){
        $tamponato = new Tamponato_Privato();
        $tamponato->codicefiscaletamponato = $request->codicefiscaletamponato;
        $tamponato->cognome = $request->cognome;
        $tamponato->nome = $request->nome;
        $tamponato->email = $request->email;
        $tamponato->telefono = $request->telefono;
        $tamponato->luogonascita = $request->luogonascita;
        $tamponato->datanascita = $request->datanascita;
        $tamponato->residenza = $request->residenza;
        $tamponato->citta = $request->citta;
        $tamponato->provincia = $request->provincia;
        $tamponato->cap = $request->cap;
        $tamponato->nazione = $request->nazione;
        $tamponato->emailprivato = $request->emailprivato;
        $tamponato->save();


        return redirect('privato/preventivo')->with(['codicefiscaletamponato'=>$request->codicefiscaletamponato,
        'email'=>$request->email]);
    }

 
}
