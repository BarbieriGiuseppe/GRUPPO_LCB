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

<<<<<<< HEAD
=======
    public function loginlab(){
        return view('login.loginlab');
    }

    public function loginazienda(){
        return view('login.loginazienda');
    }

    public function loginasl(){
        return view('login.loginasl');
    }
>>>>>>> 22883af7641c7c376146b83aa53ba37e56f1864e
}
