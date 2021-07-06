<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrazioneController extends Controller
{
    public function registrazioneprivato(){
        return view('registrazione.registrazioneprivato');
    }

    public function registrazionemedico(){
        return view('registrazione.registrazionemedico');
    }

    public function convenzionalab(){
        return view('registrazione.convenzionalab');
    }

    public function registrazioneazienda(){
        return view('registrazione.registrazioneazienda');
    }
}