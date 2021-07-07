<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginMedicoController extends Controller
{
    public function loginmedico(){
        return view('login.loginmedico');
    }
    
}
