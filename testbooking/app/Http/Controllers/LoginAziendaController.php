<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAziendaController extends Controller
{
    public function loginazienda(){
        return view('login.loginazienda');
    }
}
