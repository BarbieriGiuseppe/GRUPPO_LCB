<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaRiservataController extends Controller
{
    public function aziendasanitariaindex(){
        return view('areariservata.aziendasanitariaindex');
    }

    public function laboratorioindex(){
        return view('areariservata.laboratorioindex');
    }

    public function laboratoriomodifica(){
        return view('areariservata.laboratoriomodifica');
    }

    public function datorelavoroindex(){
        return view('areariservata.datorelavoroindex');
    }
    
    public function datorelavoromodifica(){
        return view('areariservata.datorelavoromodifica');
    }

    public function datorelavoroprenotazione(){
        return view('areariservata.datorelavoroprenotazione');
    }

    public function medicocuranteindex(){
        return view('areariservata.medicocuranteindex');
    }
    
    public function medicocurantemodifica(){
        return view('areariservata.medicocurantemodifica');
    }

    public function medicocuranteprenotazione(){
        return view('areariservata.medicocuranteprenotazione');
    }
}
