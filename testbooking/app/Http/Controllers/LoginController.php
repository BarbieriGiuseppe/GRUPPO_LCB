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

}
