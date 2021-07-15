<?php

namespace App\Http\Controllers\Privato;

use App\Http\Controllers\Controller;
use App\Models\Privato;
use App\Controllers\Privato\Auth\LoginController;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfPrivato;
use app\Http\Middleware\RedirectIfNotPrivato;

class ModificaController extends Controller
{
    public  function mostraProfilo()
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $data = DB::select('select * from privatos');               
        return view('privato/modifica',['data'=>$data,'id'=>$id]);
    }


    public  function modificaAnagrafica($id)
    {   
        $id = Auth::guard('privato')->user()->id-1;
        $user = DB::select('select * from privatos');              
        return view('privato/editanagrafica',['user'=>$user,'id'=>$id]);
    }

    public  function updateAnagrafica($id)
    {   

        /*$codicefiscale = $req->input('codicefiscale');
        $cognome = $req->input('cognome');
        $nome = $req->input('nome');
        $telefono = $req->input('telefono');
        $datanascita = $req->input('datanascita');
        $luogonascita = $req->input('luogonascita');
        $residenza = $req->input('residenza');
        $citta = $req->input('citta');
        $provincia = $req->input('provincia');
        $cap =$req->input('cap');
        $nazione = $req->input('nazione');
        $email = $req->input('email');
        $password =$req->input('password');


        DB::update('update privatos set codicefiscale = ? ,
        cognome = ?, nome = ? ,telefono = ? ,datanascita = ? ,
        luogonascita = ? ,residenza = ? ,citta = ? ,provincia = ? ,
        cap = ? ,nazione = ? ,email = ? ,password = ?  where id = ?',
        [ $codicefiscale ,$cognome , $nome ,$telefono ,$datanascita ,$luogonascita ,
        $residenza ,$citta ,$provincia ,$cap ,$nazione ,$email  ,$password ,$id]);*/

        
        return redirect('privato/modifica');
    }
  
}
