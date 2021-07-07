<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaRiservataPrivatoController extends Controller
{
    public function privatoindex(){
        return view('areariservata.homeprivato');
    }
    
    public function privatomodifica(){
        return view('areariservata.privatomodifica');
    }

    public function privatoprenotazione(){
        return view('areariservata.privatoprenotazione');
    }

    public function __construct(){
        $this->middleware('auth:utente_privato');
        
    }


}
