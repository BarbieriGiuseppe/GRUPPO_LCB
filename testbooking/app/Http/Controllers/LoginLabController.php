<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginLabController extends Controller
{
    public function loginlab(){
        return view('login.loginlab');
    }
}
