<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Utente_Privato;


class LoginPrivatoController extends Controller
{
    public function __construct(){
        $this->middleware('guest:utente_privato');
    }

    public function loginprivato(){
        return view('login.loginprivato');

    }

    public function loginp(Request $request){
       //validate the form data
       $this->validate($request, [
        'Mail' => 'required|Mail',
        'password' => 'required|min:6'
       ]);

       //attempt to log the user in
       

       
       if(Auth::guard('utente_privato')->attempt(['Mail' => $request->Mail, 'password' => $request->password], $request->remember)){

       
        //if successful
       // return redirect('privato/homeprivato');
        echo 'Sei Dentro!';
            return redirect()->intended(route('privato.homeprivato'));
       }else
       
       return redirect()->back()->withInput($request->only('mail','remember'))->with('error','Email and password are wrong');
      }


}
