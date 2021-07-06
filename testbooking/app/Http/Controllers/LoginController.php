<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginprivato(){
        return view('login.loginprivato');

    }

    public function loginmedico(){
        return view('login.loginmedico');
    }

    public function loginlab(){
        return view('login.loginlab');
    }

    public function loginazienda(){
        return view('login.loginazienda');
    }

    public function loginasl(){
        return view('login.loginasl');
    }

    public function __construct(){
        $this->middleware('auth');

    }

    public function signin(Request $request){
       $request->validate([

            'email' => 'required',
            'password' => 'required'
       ]);

       if(Auth::attempt(['email' => $request, 'password' => $request]));
       {
           return redirect()->intended(route ('areaprivato'));
       }
        
       return redirect()->back()->with('danger', 'Credenziali non corrette!');
       
    }

}
