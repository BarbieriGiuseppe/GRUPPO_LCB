<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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




}
