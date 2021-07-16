<?php

namespace App\Http\Controllers\Privato;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Models\Tamponato_Privato;
use App\Models\Prezzo_Tampone;
class RiepilogoController extends Controller
{

    public function elencoPrezzi($codicelabpub){
        echo json_encode(DB::table('prezzo_tampone')->where('codicelabpub', $codicelabpub)->get());
   }
}
