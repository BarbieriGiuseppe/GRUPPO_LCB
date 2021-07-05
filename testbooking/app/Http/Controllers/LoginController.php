<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginprivato(){
        return view('login.loginprivato');
    }
}
