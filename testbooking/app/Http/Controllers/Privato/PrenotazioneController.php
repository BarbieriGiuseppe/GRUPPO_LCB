<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Privato\Auth;


class PrenotazioneController extends Controller
{


    public function elencoLaboratori() {
        $data = DB::table('laboratorios')->get();
        return view('privato.prenotazione')->with('data', $data);
    }


    public function elencoTipologie($codicelabpub){
      //  $id =  Auth::guard('laboratorio')->user()->id;
    //   $tipologia = DB::select('select tipologia from prezzo_tampone where codicelabpubblico = (select codicelabpubblico from laboratorios where id = ?)', [$id]);
         echo json_encode(DB::table('prezzo_tampone')->where('codicelabpub', $codicelabpub)->get());
    }
    




}
